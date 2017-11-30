<div class="container-fluid center-align">
  <div class="container">
    <ul class="pagination">
      <li class="waves-effect"><a href="/GirlzPower/index.php/accueil/<?php echo ((isset($parts[4]) && $parts[4] > 0) ? ($parts[4] - 1) : "")?>"><i class="material-icons">chevron_left</i></a></li>
      <?php

        for($i = 1; $i < $nbPages; $i++){

          echo "<li class='waves-effect'><a href='/GirlzPower/index.php/accueil/".$i."'>".$i."</a></li>";
        }
       ?>
       <li class="waves-effect"><a href="/GirlzPower/index.php/accueil/<?php echo ((isset($parts[4]) && $parts[4] < $nbPages - 1) ? ($parts[4] + 1) : "2")?>"><i class="material-icons">chevron_right</i></a></li>

    </ul>
  </div>

</div>
