<?php
function getMoviesPage($pdo, $page){


}


function getGenres($pdo , $id_films){

}


function insertMovie($film){
  if(isset($_POST[''])){
}
}

function detailsMovie($chemin, $pdo){
  /* Connexion a la base de données films */
  $bdd = $pdo->query('SELECT * FROM films');
  /*  Mettre en tableau la base de données  */
  foreach ($bdd as $bdd_table) {
    /* Verifier si l'id du films existe */
    if(isset($chemin[4]))
    {
      /* Si l'id correspond a une id valide */
      if($chemin[4] == $bdd_table[0])
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
