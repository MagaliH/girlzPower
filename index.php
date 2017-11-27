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
		include_once('./view/header.html');
 		$movies = getmovie($pdo, $p);


		include_once('./view/films.php');
    getGenres($pdo, 4);
		include_once('./view/pagination.php');
		include_once('./view/footer.html');
		break;

	case 'films':

    	include_once('db_config.php');
    	include_once('./modele/movies.php');
			include_once('./view/header.html');
    	$details = detailsMovie($pdo, $parts[4]);
			include_once('./view/details.php');
     	// getGenres($pdo, 4);
			include_once('./view/footer.html');
     	break;

	case 'formulaire':
		include_once('./view/header.html');
		include_once('db_config.php');
		include_once('./view/formulaire.php');
		include_once('./view/footer.html');
		break;

	default:
		echo "Grosse erreur, veuillez entrer un chiffre entre 1 et 8";
}

?>
