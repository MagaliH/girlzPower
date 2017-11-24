<?php
$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', rtrim($uri, '/'));



switch ($parts[3]) {
	case 'accueil':

		if(isset($parts[4])){

			if(is_numeric($parts[4])){

				$p = $parts[4];

			}else
				$p = 0;
		}else
			$p = 0;

		include_once('db_config.php');
		include_once('./modele/movies.php');
		getmovie($pdo, $p);
    	getGenres($pdo, 4);
		break;

	case 'films':
	
    	include_once('db_config.php');
    	include_once('./modele/movies.php');

    	detailsMovie($parts, $pdo);
     	getGenres($pdo, 4); 
     	break;

	default:
		echo "Grosse erreur, veuillez entrer un chiffre entre 1 et 8";
}

?>
