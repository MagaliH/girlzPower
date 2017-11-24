<?php

function getmovie($pdo) {
  $nb_films_page=5; // On met dans une variable le nombre de films qu'on veut par page

  // On récupère le nombre total de films
  $reponse=$pdo->query('SELECT COUNT(*) FROM films');
  $total_films = $reponse->fetch();
  $nombre_films=$total_films[0];



  // on détermine le nombre de pages
  $nb_pages = ceil($nombre_films / $nb_films_page);


  // Puis on fait une boucle pour écrire les liens vers chacune des pages
  echo 'Page : ';
  for ($i = 1 ; $i <= $nb_pages ; $i++)
  {
      echo '<a href="films_page.php?page=' . $i . '">' . $i . '</a> ';
  }
  ?>
  <div align="center">

  <?php
  // Maintenant, on affiche films
  if (isset($_GET['page'])){
      $page = $_GET['page']; // On récupère le numéro de la page indiqué dans l'adresse (films.php?page=4)
  }else{ // La variable n'existe pas, c'est la première fois qu'on charge la page
      $page = 1; // On se met sur la page 1 (par défaut)
  }
  // On calcule le numéro du premier message qu'on prend pour le LIMIT de MySQL
  $premier_films_afficher = ($page - 1) * $nb_films_page;

  $reponse = $pdo->query('SELECT * FROM films ORDER BY titre ASC LIMIT ' . $premier_films_afficher . ', ' . $nb_films_page);

  while ($donnees = $reponse->fetch()){
      echo '<p><strong>' . stripslashes($donnees['titre']) . '</strong>'.'</p>';
  }

  // catch(Exception $e){
  //     // En cas d'erreur, on affiche un message et on arrête tout
  //     die('Erreur : '.$e->getMessage());
  // }

  $reponse->closecursor(); // On n'oublie pas de fermer la connexion à MySQL ;o)

}

?>
