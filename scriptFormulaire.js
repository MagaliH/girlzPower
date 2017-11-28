$(function(){
    $('#formu').click(function(e){
      e.preventDefault(); //enlève comportement par defaut lors envoie formulaire
      $('.er').empty(); //remet a zero les message d'erreur
      var postdata = $('#formu').serialize(); //recupere donnée formulaire et les stocks dans une variable

      $.ajax({
        type: 'post',
        url: 'http://localhost/girlzPower/index.php/ajout',
        data: postdata,
        dataType: 'json',
        success: function(result){
          console.log("success");
          if(result.isSuccess){
            $("#formu").append("<p>Votre film a bien été ajouté !</p>");
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
          console.log(data);
        }

      });

    });
})
