<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  </head>
  <body>


<form class="col s12 m12" method="post" id="formu">
  <div class="row">
     <div class="input-field col s6">
       <input id="titre" name="titre" type="text" class="validate" value="">
       <label for="titre">Titre</label>
       <p class="er"></p>
     </div>
   <div class="input-field col s6">
    <select id="annee" name="annee" >
      <option value="1">2017</option>
      <option value="2">2016</option>
      <option value="3">2015</option>
    </select>
    <label>Année</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s6">
    <input id="realisateur" name="realisateur" type="text" class="validate">
    <label for="realisateur">Réalisateur</label>
    <p class="er"></p>
  </div>
  <!-- <div class="col s6">
    <div class="chips chips-initial" name="genre" id="genre" value="">Genre</div>
  </div>
  </div> -->
   <div class="row">
       <div class="input-field col s12">
         <textarea id="description" name="description" class="materialize-textarea"></textarea>
         <label for="description">Description</label>
         <p class="er"></p>
       </div>
    </div>
    <div class="row">
      <button class="waves-effect" type="button" name="button">Envoyer</button>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script type="text/javascript" src="http://localhost/girlzPower/scriptFormulaire.js"></script>
</body>
</html>
