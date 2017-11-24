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

    }else{
        $current =$p;
    }
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
  print_r($genres);



  }



function insertMovie($film){
  if(isset($_POST[''])){
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
