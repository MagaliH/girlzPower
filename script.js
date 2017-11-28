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
