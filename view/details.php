<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col s4 m4 l4 xl4">

        <?php
        foreach ($details as $detail) {

            if(empty($detail['urlimg'])){
              echo "<img src='http://localhost/girlzPower/view/img/affiche2.svg' width='400'>";
            }else{
              echo "<img src='".$detail['urlimg']."' width='400'>";
            }

          }

         ?>

      </div>
      <div class="col s8 m8 l8 xl8">

        <?php

        foreach ($details as $detail) {

        echo "<h4 class='center-align titre'>".$detail['titre']."</h4>";
        echo "<p><strong>Année : </strong>".$detail['annee']."</p>";
        echo "<p><strong>Description : </strong>".$detail['description']."</p>";
        echo "<p><strong>Réalisateur : </strong>".$detail['realisateur']."</p>";


        }
        echo "<p><strong>Genre : </strong>";
        foreach ($genres as $genre){

            echo $genre[0]." ";
        }

        echo "</p>";



        ?>

      </div>
    </div>
  </div>
</div>
