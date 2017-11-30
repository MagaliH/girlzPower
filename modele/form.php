<?php
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $age = $_POST['age'];
  $mdp = $_POST['mdp'];
  $pseudo = $_POST['pseudo'];

  $tabUser = array('nom' => $nom, 'prenom' => $prenom, 'age' => $age, 'mdp' => $mdp, 'pseudo' => $pseudo);
  print_r($tabUser);

?>
