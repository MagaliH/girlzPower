<div class="container-fluid">
  <div class="container">
    <?php
    foreach ($movies as $movie) {
    echo "<div class='row'>";
      echo "<div class='col s12 m12 l12 xl12'>";
         echo "<div id='car' class='card'>";
           echo "<div class='card-content'>";
             echo "<span class='card-title'>". $movie['titre']."</span>";
              echo "<p>".$movie['annee']."</p>";
              if(empty($movie['urlimg'])){
                echo "<img src='http://localhost/girlzPower/view/img/affiche2.svg' width='300'>";
              }else{
                echo "<img src='".$movie['urlimg']."' width='300'>";
              }

          echo "</div>";
           echo "<div class='card-action'>";
             echo "<a href='http://localhost/girlzPower/index.php/films/".$movie['id_film']."'>Détails</a>";
           echo "</div>";
         echo "</div>";
       echo "</div>";
     echo "</div>";

    }

     ?>
  </div>

</div>
