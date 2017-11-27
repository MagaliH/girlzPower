$(document).ready(function() {
   $('select').material_select();
 });

$('.chips').material_chip();

$('.chips-initial').material_chip({
  data: [{
    tag: 'Romance',
  }, {
    tag: 'Aventure',
  }, {
    tag: 'Science Fiction',
  }],
});

$('.chips-autocomplete').material_chip({
    autocompleteOptions: {
      data: {
        'Drame': null,
        'Action': null,
        'Fantastique': null
      },
      limit: Infinity,
      minLength: 1
    }
  });
