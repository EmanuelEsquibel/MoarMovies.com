;(function($){

  $(document).ready( start );

  function start() {
    var buttonAdd = $( '#buttonAdd' );

    function startAjax() {
      var textValue = $( '#textValue' ).val();
      var urlAjax = "http://localhost/laravel/public/genders";
      var methodAjax = "POST";
      var token = $( '#token' ).val();
      $.ajax({
        method: methodAjax,
        url: urlAjax,
        headers: {'X-CSRF-TOKEN': token },
        dataType: 'json',
        data: { genre: textValue },
        //Operacion Exitosa.
        success: function( data ) {
          console.log( data.msg );
          $('.AjaxSuccess').fadeIn();
        },
        //Errores.
        error: function (jqXHR,error, errorThrown) {
          console.log(jqXHR.status);
          console.log(jqXHR.responseText);
          console.log(errorThrown);
        }
      })
    }
    buttonAdd.click( startAjax );
  }
})(jQuery);
