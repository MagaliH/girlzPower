<?php

// Fonction pour récuperer tous les genre

function AllGenre($pdo){
  $genres = $pdo->query("SELECT nom FROM genre ");
  $genre = $genres->fetchAll();
  return $genre;
}


// Fonction pour récuperer x films par page

function getmovie($pdo, $p){

  $perPage = 5;
  $req = $pdo->query("SELECT COUNT(*) AS total FROM films");
  $result =$req->fetch();
  $total = $result['total'];
  $nbPage = ceil($total/$perPage);

if(isset($p) && !empty($p) && ctype_digit($p) == 1){
    if($p >$nbPage){

        $current = $nbPage;

    }else
        $current =$p;
}else{

    $current = 1;
}
    $firstOfPage = ($current-1)*$perPage;
    $reqFilms = $pdo->query("SELECT titre, annee, id_film FROM films ORDER BY titre ASC LIMIT $firstOfPage, $perPage");
    $films[0] = $reqFilms->fetchAll();
    $films[1] = $nbPage;
    $films[2] = $current;
    return $films;
}


// Fonction pour récuperer le genre d'un film précis

function getGenres($pdo, $id_film){
  $genre = $pdo->query("SELECT genre.nom FROM l_film_genre INNER JOIN genre ON l_film_genre.id_genre = genre.id_genre WHERE l_film_genre.id_film=$id_film");
  $genres = $genre->fetchAll();
  return $genres;
  }


// Fonction verification formulaire

  function verifyInput($var){
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
  }


// Fonction pour insérer un film (titre, annéé, réalisateur, genre, description) dans la bdd et renvoie tableau json requete ajax

function insertMovie($pdo){

  $array = array('titre'=>"",'annee'=>"",'realisateur'=>"",'genre'=>"", 'description'=>"", 'titreError'=>"", 'anneeError'=>"", 'realisateurError'=>"", 'genreError'=>"",'descriptionError'=>"", 'isSuccess'=>"");

  if($_SERVER["REQUEST_METHOD"] == "POST"){

      $array['titre'] = verifyInput($_POST['titre']);
      $array['annee'] = verifyInput($_POST['annee']);
      $array['realisateur'] = verifyInput($_POST['realisateur']);
      //$array['genre'] = verifyInput($_POST['genre']);
      $array['description'] = verifyInput($_POST['description']);
      $array['isSuccess'] = true;

      if(empty($array['titre'])){

        $array['titreError'] = "Entrez un titre !";
        $array['isSuccess'] = false;
      }

      if(empty($array['realisateur'])){

        $array['realisateurError'] = "Entrez le nom du réalisateur !";
        $array['isSuccess'] = false;
      }

      if(empty($array['description'])){

        $array['descriptionError'] = "Entrez la description du film !";
        $array['isSuccess'] = false;
      }

      if($array['isSuccess']){

       $insert = $pdo->query("INSERT INTO films (titre, description, annee, realisateur) VALUES('".$array['titre']."','".$array['description']."','".$array['annee']."','".$array['realisateur']."')");

      }
      echo json_encode($array);
    }
}


// Fonction pour récuperer les détails d'un film précis

function detailsMovie($pdo, $id_film){

  $bdd = $pdo->query("SELECT * FROM films WHERE id_film = $id_film");
  $detailsFilms = $bdd->fetchAll();
  return $detailsFilms;
}



?>
