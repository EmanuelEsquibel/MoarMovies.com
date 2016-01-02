$(document).on('click', '.pagination a', function( e ){
  e.preventDefault();
  var page = $(this).attr('href').split('page=')[1];
  var route = "http://localhost/laravel/public/user";

  $.ajax({
    url: route,
    type: 'GET',
    data: {
      page: page
    },
    dataType: 'json',
    success: function( data ){
      $(".users").html( data );
    }
  });
});
