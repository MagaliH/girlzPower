// Modale pour connexion et création compte
$(document).ready(function(){
  // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
  $('#modal1').modal();
});

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
       $('#submitUser').click(function(e){
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
               $('#pass').html("<p>Erreur mot de passe</p>");

             }
             else{
               console.log('success');
               $('#formUser').html("");
               $('#signup').html("");
               $('#formUser').html("<h3 class='ajout'>Bienvenue " + result['pseudo']+" ! </h3>");
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
      $('.modal-content').append("<div class='container row'><div class='col s12 m12 l7 xl7'>");
      $('.modal-content').append("<h4 class='center-align'>Se connecter</h4>");
      $('.modal-content').append("<form><div class='row'><div class='input-field col s12 m12 l12 xl12'><i class='material-icons prefix'>account_circle</i><input id='input_text' type='text' data-length='10'><label for='input_text'>Pseudo</label></div></div><div class='row'><div class='input-field col s12 m12 l12 xl12'><i class='material-icons prefix'>lock</i><input id='password' type='password' data-length='10'><label for='password'>Mot de passe</label></div></div><div class='row'><div class='center-align col s12 m12 l12 xl12'><a class='valign-wrapper waves-effect waves-light btn'>button</a></div></div></form>");
      $('.modal-content').append("</div></div>");

    })
    })
