<?php
function insertUser($pdo, $tabUser){

    $insertUser = $pdo->query("INSERT INTO users (nom, prenom, age, mdp, pseudo) VALUES ('".$tabUser['nom']."','".$tabUser['prenom']."','".$tabUser['age']."','".$tabUser['mdp']."','".$tabUser['pseudo']."')");
}



function verifyInput($var){
  $var = trim($var);
  $var = stripslashes($var);
  $var = htmlspecialchars($var);
  return $var;
}

function getInfoUser(){

  if(isset($_POST['nom'])){
    $tabUser['nom'] = verifyInput($_POST['nom']);
  }else{
    $tabUser['nom'] = false;
  }

  if(isset($_POST['prenom'])){
      $tabUser['prenom'] = verifyInput($_POST['prenom']);
  }else{
    $tabUser['prenom'] = false;
  }

  if(isset($_POST['age'])){
    if(!preg_match("#[^0-9$]#", $_POST['age']) && strlen($_POST['age']) <= 3){
      $tabUser['age'] = verifyInput($_POST['age']);
    }
    else{
      $tabUser['age'] = false;
    }

  }else{
    $tabUser['age'] = false;
  }

  if(isset($_POST['mdp']) && isset($_POST['mdpconf'])){

    if($_POST['mdp'] == $_POST['mdpconf']){

        $tabUser['mdp'] = $_POST['mdp'];
        $tabUser['mdpconf'] = $_POST['mdpconf'];

    }else{
      $tabUser['mdp'] = false;
    }


  }else{

    $tabUser['mdp'] = false;
  }

  // if(isset($_POST['mdpconf'])){
  //
  //   $tabUser['mdpconf'] = $_POST['mdpconf'];
  //
  // }else{
  //
  //   $tabUser['mdpconf'] = false;
  // }

  if(isset($_POST['pseudo'])){

      $tabUser['pseudo'] = verifyInput($_POST['pseudo']);

  }else{

    $tabUser['pseudo'] = false;
  }

  return $tabUser;

}

 ?>
