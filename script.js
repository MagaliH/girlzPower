$(document).ready(function() {
   $('select').material_select();
 });

$('.chips-initial').material_chip({
  data: [{
    tag: 'Romance',
  }, {
    tag: 'Aventure',
  }, {
    tag: 'Science Fiction',
  }],
});
