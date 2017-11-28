<div class="container-fluid">
  <div class="container">


  <?php

  foreach ($details as $detail) {

  echo "<p> Titre : ".$detail['titre']."</p>";
  echo "<p> Année : ".$detail['annee']."</p>";
  echo "<p> Description : ".$detail['description']."</p>";
  echo "<p> Réalisateur : ".$detail['realisateur']."</p>";




  }
  echo "<p> Genre : ";
  foreach ($genres as $genre){

      echo $genre[0]." ";
  }

  echo "</p>";



  ?>
  </div>
</div>
