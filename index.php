<?php
$uri = $_SERVER['REQUEST_URI'];



$parts = explode('/', rtrim($uri, '/'));
// $id_str = array_pop($parts);





switch ($parts[3]) {
	case 'accueil':

		if(isset($parts[4])){

			if(is_numeric($parts[4])){

				$page = $parts[4];

			}else
				$page = 0;
		}else
			$page = 0;
	
		include_once('db_config.php');
		include_once('./modele/films.php');
		getmovie($pdo);
		break;

	default:
		echo "reste sur le front :p";
}

?>
