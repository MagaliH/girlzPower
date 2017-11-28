<?php
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
    $reqFilms = $pdo->query("SELECT titre, annee FROM films ORDER BY titre ASC LIMIT $firstOfPage, $perPage");
    $films = $reqFilms->fetchAll();
    var_dump($films);
}



function getGenres($pdo, $id_film){
  $genre = $pdo->query("SELECT genre.nom FROM l_film_genre INNER JOIN genre ON l_film_genre.id_genre = genre.id_genre WHERE l_film_genre.id_film=$id_film");
  $genres = $genre->fetchAll();
  print_r($genres[0]);
  }



function insertMovie($pdo){


  function verifyInput($var){
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
  }

  $array = array('titre'=>"",'annee'=>"",'realisateur'=>"",'genre'=>"", 'description'=>"", 'titreError'=>"", 'anneeError'=>"", 'realisateurError'=>"", 'genreError'=>"",'descriptionError'=>"", 'isSuccess'=>"");

if($_SERVER["REQUEST_METHOD"] == "POST"){
      $array['titre'] = verifyInput($_POST['titre']);
      //$array['annee'] = verifyInput($_POST['annee']);
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

       $insert = $pdo->query("INSERT INTO films (description, titre, realisateur) VALUES('".$array['description']."','".$array['titre']."','".$array['realisateur']."')");
       echo "alouette, gentille alouette ";
      }
      echo json_encode($array);
}

}

function detailsMovie($parts, $pdo){
  /* Connexion a la base de données films */
  $bdd = $pdo->query('SELECT * FROM films');
  /*  Mettre en tableau la base de données  */
  foreach ($bdd as $bdd_table) {
    /* Verifier si l'id du films existe */
    if(isset($parts[4]))
    {
      /* Si l'id correspond a une id valide */
      if($parts[4] == $bdd_table[0])
      {
        /* Afficher les informations */
        echo $bdd_table[1];
        echo $bdd_table[2];
        echo $bdd_table[3];
      }
    }
  }
}




 ?>
