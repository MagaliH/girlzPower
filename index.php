<?php
$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', rtrim($uri, '/'));
// $id_str = array_pop($parts);
include_once('db_config.php');




switch ($parts[3]) {
  case 'accueil':

  if(isset($parts[4])){
    if(is_numeric($parts[4])){
      $page = $parts[4];
    }else{
      $page = 0;
    }
  }else{
    $page = 0;
  }
  include_once('./modele/films.php');

  getmovie($pdo);



  break;
  case 'films':

  include_once('db_config.php');
  include_once('./modele/movies.php');
  detailsMovie($parts, $pdo);
  break;
  case '/films/index.php/films_page.php?page=3':
  include_once('db_config.php');
  include_once('./modele/films.php');
  getmovie($pdo);
  break;
  case '/films/index.php/films_page.php?page=4':
  include_once('db_config.php');
  include_once('./modele/films.php');
  getmovie($pdo);
  break;
  case '/films/index.php/films_page.php?page=5':
  include_once('db_config.php');
  include_once('./modele/films.php');
  getmovie($pdo);
  break;
  case '/films/index.php/films_page.php?page=6':
  include_once('db_config.php');
  include_once('./modele/films.php');
  getmovie($pdo);
  break;
  case '/films/index.php/films_page.php?page=7':
  include_once('db_config.php');
  include_once('./modele/films.php');
  getmovie($pdo);
  break;
  case '/films/index.php/films_page.php?page=':
  include_once('db_config.php');
  include_once('./modele/films.php');
  getmovie($pdo);
  break;
  default:
  echo "reste sur le front :p";
  break;
}

?>
