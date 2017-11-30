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
		include_once('./view/nav.php');
		include_once('./view/header.html');
		$nbPages = getmovie($pdo, $p)[1];
		$current = getmovie($pdo, $p)[2];
		include('./view/pagination.php');
 		$movies = getmovie($pdo, $p)[0];
		include_once('./view/films.php');
    getGenres($pdo, 4);
		include('./view/pagination.php');
		include_once('./view/footer.php');
		break;

	case 'films':

    	include_once('db_config.php');
    	include_once('./modele/movies.php');
			include_once('./view/nav.php');
			include_once('./view/header.html');
    	$details = detailsMovie($pdo, $parts[4]);
			$genres = getGenres($pdo, $parts[4]);
			include_once('./view/details.php');
     	// getGenres($pdo, 4);
			include_once('./view/footer.php');
     	break;

	case 'formulaire':
		include_once('./view/nav.php');
		include_once('./view/header.html');
		include_once('db_config.php');
		include_once('./modele/movies.php');
		$genre = AllGenre($pdo);
		include_once('./view/formulaire.php');
		include_once('./view/footer.php');
		break;

	case 'ajout':
		include_once('db_config.php');
		include_once('./modele/movies.php');
		insertMovie($pdo);

		break;

	case 'connexion':
		include_once('./view/nav.php');
		include_once('./view/header.html');
		include_once('./view/login.html');
		include_once('./view/footer.php');
		break;

	case 'newCompte':
		include_once('./view/nav.php');
		include_once('./view/header.html');
		include_once('./view/signup.html');
		include_once('./view/footer.php');
		break;

	case 'ajoutUser':
		include_once('db_config.php');
		include_once('./modele/users.php');
		$tabUser = getInfoUser();
		(in_array(false, $tabUser)? $verif = 1 : $verif =0);
		if($verif != 1){

			insertUser($pdo, $tabUser);

		}
		echo json_encode($tabUser);
		break;

	default:
		echo "Vive le front !";
	}

	?>
