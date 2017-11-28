<?php
  $tab = array("titre"="", "annee"="", "realisateur"="", "genre"="", "description"="", "titreError"="", "anneeError"="", "realisateurError"="", "genreError"="","descriptionError"="", "isSuccess"= "");

if($_SERVER["REQUEST_METHOD"] == "POST"){
      $array['titre'] = verifyInput($_POST['titre']);
      $array['annee'] = verifyInput($_POST['annee']);
      $array['realisateur'] = verifyInput($_POST['realisateur']);
      $array['genre'] = verifyInput($_POST['genre']);
      $array['description'] = verifyInput($_POST['description']);
      $array['isSuccess'] = true;

      if(empty($array['titre'])){
        $array['titreError'] = "Entrez un titre !";
        $array['isSuccess'] = false;
      }


      if(empty($array['realisateur'])){
        $array['realisateurError'] = "Entrez le nom du réalisateur !";
        $array['isSuccess'] = false;
      }

      if(empty($array['description'])){
        $array['descriptionError'] = "Entrez la description du film !";
        $array['isSuccess'] = false;
      }

      if($array['isSuccess']){
        INSERT INTO films ('titre', 'annee', 'description'; 'realisateur', 'genre') VALUES ("$array['titre']", "$array['annee']", "$array['description']", "$array['realisateur']", "$array['genre']");
      }

      echo json_encode($array);
}

function verifyInput($var){
  $var = trim($var);
  $var = stripslashes($var);
  $var = htmlspecialchars($var);
  return $var;
}
 ?>
