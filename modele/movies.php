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
    $reqFilms = $pdo->query("SELECT titre, annee, id_film FROM films ORDER BY titre ASC LIMIT $firstOfPage, $perPage");
    $films = $reqFilms->fetchAll();
    return $films;
}



function getGenres($pdo, $id_film){
  $genre = $pdo->query("SELECT genre.nom FROM l_film_genre INNER JOIN genre ON l_film_genre.id_genre = genre.id_genre WHERE l_film_genre.id_film=$id_film");
  $genres = $genre->fetchAll();
  return $genres;
  }



// function insertMovie($film){
// INSERT INTO films (titre, annee, realisateur, description, genre) VALUES ($films[0], $films[1], $films[2], $films[3], $films[4])
//
// }

function detailsMovie($pdo, $id_film){

  $bdd = $pdo->query("SELECT * FROM films WHERE id_film = $id_film");
  $detailsFilms = $bdd->fetchAll();
  return $detailsFilms;

}




 ?>
