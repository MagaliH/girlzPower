<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste de Films</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/girlzPower/view/css/materialize.min.css">
    <link rel="stylesheet" href="http://localhost/girlzPower/view/css/style.css">
</head>
<body>

  <nav class="container-fluid" id="nav-accueil">
      <div class="nav-wrapper container">
          <a href="/girlzPower/index.php/accueil" class="brand-logo left"><img src="http://localhost/girlzPower/view/img/logo.svg" alt="logo"></a>
          <ul id="nav-mobile" class="right">
            <!-- Modal Trigger -->
            <li>  <a class=" modal-trigger hide-on-small-only" href="#modal1">Se connecter</a>
            <li>  <a class=" modal-trigger hide-on-med-and-up" href="#modal1"><i class="material-icons right">menu</i></a>

              <!-- Modal Structure -->
              <div id="modal1" class="modal modal-fixed-footer">
                <div class="modal-content">
                  <h4 class="connex center-align">Se connecter</h4>
                <p class="center-align"> <a id="log" class="waves-effect waves-light btn co">Connexion</a></p>
                 <p class="center-align hide-on-small-only"><a id="new" class="waves-effect waves-light btn co">Créer un compte</a></p>
                 <p class="center-align hide-on-med-and-up"><a id="new" class="waves-effect waves-light btn co">Compte</a></p>
                </div>

                <div id="formLogin">
                </div>

                <div class="modal-footer">
                  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Retour</a>
                </div>
              </div></li>
          </ul>
      </div>
  </nav>
