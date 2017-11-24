$('.btn-plus').click(function()){
  var titre =
  $.ajax({
    type: "GET";
    url: "films.php",
    dataType: "json",
    data: titre
    success: function() 
  })
}
