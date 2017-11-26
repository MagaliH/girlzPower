<div class="container-fluid">
  <div class="container">
    <div class="row">
    <form class="col s12" method="post" action="../modele/movies.php">

      <!-- titre realisateur -->
      <div class="row">
        <div class="input-field col s6">
          <input  id="titre" type="text" class="validate">
          <label for="titre">Titre :</label>
        </div>
        <div class="input-field col s6">
          <input  id="realisateur" type="text" class="validate">
          <label for="realisateur">Réalisateur :</label>
        </div>
      </div>

      <!-- description textarea -->
      <div class="row">
        <div class="input-field col s12">
          <textarea id="description" class="materialize-textarea"></textarea>
          <label for="description">Description :</label>
        </div>
      </div>

      <!-- année select -->
      <div class="row">
        <div class="input-field col s12">
          <select>
            <?php
            for ($i = 1900; $i <= 2017; $i++){
            echo '<option value="' . $i . '">' . $i . '</option>';}
            ?>
          </select>
          <label>Année :</label>
        </div>
      </div>

      <!-- Genre tag -->
      <div class="row">
        <div class="chips chips-autocomplete">Genre :</div>
      </div>
        <!-- bouton envoi -->
      <div class="row">
        <div class="center-align">
          <button class="btn waves-effect waves-light col s12 m6 l3 xl3" type="submit" name="action">Soumettre
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>
  </div>
  </div>
</div>
