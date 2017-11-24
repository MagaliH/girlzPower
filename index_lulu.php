






































<?php

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', rtrim($uri, '/'));


switch ($parts[4]) {
    case 'accueil':
        if(isset($parts[5])){
            
            if(is_numeric($parts[5])){
                
                
                $p = $parts[5];
                
            }else{
                
                $p = 0;
            }
        }else{
            
            $p = 0;
        }   
    
        include_once('dbconfig.php');
        include_once('model.php');

        
        lulu($pdo, $p);
        break;
    default:
        echo 'Grosse erreur, veuillez entrer un chiffre entre 1 et 8';
    
        
  
}


?>