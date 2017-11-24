<?php
function getMoviesPage($pdo, $page){

    echo 'toto';
    echo $page;
}


function getGenres($pdo, $id_film){


    $genre = $pdo->query("SELECT genre.nom FROM l_film_genre  INNER JOIN genre ON l_film_genre.id_genre = genre.id_genre WHERE l_film_genre.id_film=$id_film");
    $genres = $genre->fetchAll();
    print_r($genres);



}


function insertMovie($film){




}



 ?>
