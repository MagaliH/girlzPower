// Modale pour connexion et création compte
$(document).ready(function(){
  // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
  $('#modal1').modal();
});

// barre navigation quand connecter
$(".dropdown-button").dropdown();
// Formulaire Ajout
$(document).ready(function() {
   $('select').material_select();
 });

$('.chips').material_chip();
$('.chips-initial').material_chip({
    data: [{
      tag: 'Romance',
    },  {
      tag: 'Drame',
    }, {
      tag: 'Action',
    }, {
      tag: 'Comédie musicale',
    }, {
      tag: 'Drame musical',
    }, {
      tag: 'Comédie',
    }, {
      tag: 'Fantastique',
    }, {
      tag: 'Aventure',
    }, {
      tag: 'Science-fiction',
    }, {
      tag: 'Policier',
    }, {
      tag: 'Thriller',
    },
    {
      tag: 'Fantasy',
    }, {
      tag: 'Road-trip',
    }],
  });

// Formulaire ajout film
$(document).ready(function() {
  $(function(){
      $('#formFilm').click(function(e){
        e.preventDefault(); //enlève comportement par defaut lors envoie formulaire
        $('.er').empty(); //remet a zero les message d'erreur
        var postdata = $('#formu').serialize(); //recupere donnée formulaire et les stocks dans une variable

        $.ajax({
          type: 'post',
          url: 'http://localhost/girlzPower/index.php/ajout',
          data: postdata,
          dataType: 'json',
          success: function(result){
            if(result.isSuccess){
              $("#remplir").html("");
              $("#formu").html("");
              $("#formu").append("<div class='center-align'><img src='http://localhost/girlzPower/view/img/popcorn.svg'><h3 class='ajout'>Merci ! Votre film a bien été ajouté !</h3></div>");
              $("#formu")[0].reset();
            }else{
              $("#titre + .er").html(result.titreError);
              $("#annee + .er").html(result.anneeError);
              $("#genre + .er").html(result.genreError);
              $("#realisateur + .er").html(result.realisateurError);
              $("#description + .er").html(result.descriptionError);
            }
          },
          error: function(data){
            console.log("error");
          }

        });

      });
  })
 });


 $(document).ready(function() {
   $(function(){
       $('#modal1').on('click','#submitUser', function(e){
         console.log('toto');
         e.preventDefault(); //enlève comportement par defaut lors envoie formulaire
         var postdata = $('#formUser').serialize(); //recupere donnée formulaire et les stocks dans une variable

         $.ajax({
           type: 'post',
           url: 'http://localhost/girlzPower/index.php/ajoutUser',
           data: postdata,
           dataType: 'json',
           success: function(result){
             console.log("succès");
             console.log(result.mdp);
             console.log(result.mdpconf);
             if(result.mdp != result.mdpconf){
               console.log("mdperreur");
               $('#pass').html("Erreur mot de passe");

             }
             else{
               console.log('success');
               $('.modal-content').html("");
               $('.modal-content').html("<h3 class='ajout'>Bienvenue " + result['pseudo']+" ! </h3>");
               $('.modal-content').html("<a href='http://localhost/girlzPower/index.php/accueil'>Retour à l'accueil</a>");
             }
           },
           error: function(data){
             console.log("error");
           }

         });

       });
   })
  });


// Au click sur Connexion
  $(function(){
    $('#log').click(function(){
      $('.modal-content').html("");
      $('.modal-content').append("<div class='container row center-align'>");
      $('.modal-content').append("<h4 class='center-align'>Se connecter</h4>");
      $('.modal-content').append("<form class='lo'><div class='row'><div class='input-field col s12 m12 l12 xl12'><i class='material-icons prefix'>account_circle</i><input placeholder='Pseudo' id='input_text' type='text' data-length='10'></div></div><div class='row'><div class='input-field col s12 m12 l12 xl12'><i class='material-icons prefix'>lock</i><input placeholder='Mot de passe' id='password' type='password' data-length='10'></div></div><div class='row'><div class='center-align col s12 m12 l12 xl12'><a class='valign-wrapper waves-effect waves-light btn'>Envoyer</a></div></div></form>");
      $('.modal-content').append("</div>");
    })
    })

// Au click sur créer Compte
$(function(){
  $('#new').click(function(){
    $('.modal-content').html("");
    $('.modal-content').append("<div class='container row center-align'>");
    $('.modal-content').append("<h4 class='center-align'>Inscription</h4>");
    $('.modal-content').append("<form id='formUser' method='post'class='ne'><div class='row'><div class='input-field col s12 m12 l6 xl6'><input placeholder='Nom' name='nom' type='text'></div><div class='input-field col s12 m12 l6 xl6'><input placeholder='Prenom' name='prenom'  type='text'></div></div><div class='row'><div class='input-field col s12 m12 l6 xl6'><input placeholder='Pseudo' name='pseudo' type='text'></div><div class='input-field col s12 m12 l6 xl6'><input placeholder='Age' name='age' type='text'></div></div><div class='row'><div class='input-field col s12 m12 l6 xl6'><input placeholder='Mot de passe' type='password' name='mdp'><p id='pass'></p></div><div class='input-field col s12 m12 l6 xl6'><input placeholder='Confirmer Mot de passe' type='password' name='mdpconf'></div><div class='center-align col s12 m12 l12 xl12'><button id='submitUser' class='waves-effect waves-light btn' type='submit' name='button'>Envoyer</button></div></div></form>");
    $('.modal-content').append("</div>");
  })
  })
