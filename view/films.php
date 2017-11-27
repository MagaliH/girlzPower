<div class="container-fluid">
  <div class="container">
    <?php
    $i = 0;
      while($i < 5){
        $j= 0;
        while($j < 2){

          echo(getmovie($pdo, $p)[$i][$j])."<br>";

          $j++;
        }


        $i++;

      }

     ?>
  </div>

</div>
