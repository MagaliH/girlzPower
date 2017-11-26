<?php
  $titre = $annee = $realisateur = $genre = $description = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
      $titre = $_POST['titre'];
      // $annee = $_POST['annee'];
      $realisateur = $_POST['realisateur'];
      // $genre = $_POST['genre'];
      $description = $_POST['description'];
}

function verifyInput($var){
  $var = trim($var);
  $var = stripslashes($var);
  $var = htmlspecialchars($var);
  return $var;
}

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  </head>
  <body>


<form class="col s12 m12" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  <div class="row">
     <div class="input-field col s6">
       <input id="titre" name="titre" type="text" class="validate" value="<?php echo $titre;  ?>">
       <label for="titre">Titre</label>
     </div>
   <div class="input-field col s6">
    <select id="annee" name="annee" >
      <option value="<?php echo $annee; ?>">2017</option>
      <option value="<?php echo $annee; ?>">2016</option>
      <option value="<?php echo $annee; ?>">2015</option>
    </select>
    <label>Année</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s6">
    <input id="realisateur" name="realisateur" type="text" class="validate" value="<?php echo $realisateur; ?>">
    <label for="realisateur">Réalisateur</label>
  </div>
  <div class="col s6">
    <div class="chips chips-initial" name="genre" id="genre" value="<?php echo $genre; ?>">Genre</div>
  </div>
  </div>
   <div class="row">
       <div class="input-field col s12">
         <textarea id="description" name="description" class="materialize-textarea"><?php echo $description ; ?></textarea>
         <label for="description">Description</label>
       </div>
    </div>
    <div class="row">
      <button class="waves-effect" type="submit" name="button">Envoyer</button>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
