<div class="container-fluid">
  <div class="container">


  <?php

  foreach ($details as $detail) {

  echo "<p> Titre : ".$detail['titre']."</p>";
  echo "<p> Année : ".$detail['annee']."</p>";
  echo "<p> Description : ".$detail['description']."</p>";
  echo "<p> Réalisateur : ".$detail['realisateur']."</p>";




  }

  ?>
  </div>
</div>
