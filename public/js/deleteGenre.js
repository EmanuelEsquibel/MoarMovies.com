;(function(){
  $(document).ready( start );
  function start() {

    $("table input").each(function(){
      var flag = false;
      $(this).click(function(){
        if( $(".confirmateDelete").css("display") == "block" ){
          $("#pleaseSelect").get(0).currentTime = 0;
          $("#pleaseSelect").get(0).play();
          $(".confirmateDelete").css("background-color", "red");
        } else {
          $("#spanGenre").text( $(this).parent().parent().children("td:nth-child(1)").text() );
          $("#delete").attr("name", $(this).attr("name") );
          //Styles
          $(".confirmateDelete").css("display", "block");
          $(".confirmateDelete").css("background-color", "#638cb5");
        }
        function colour(){
          $(".confirmateDelete").css("background-color", "#638cb5");
        }
        setTimeout(colour,100);
      });
    });

    function cancel(){
      $(".confirmateDelete").css("display", "none");
    }

    function startAjax(){
      var url = "http://localhost/laravel/public/genders/" + $("#delete").attr("name");
      var token = $("#token").val();
      $.ajax({
        url: url,
        headers: {'X-CSRF-TOKEN': token },
        type: 'DELETE',
        dataType: 'json',
        data: {
          id: $("#delete").attr("name"),
        },
        success: function(){
          refresh();
        }
      });
    }

    $("#cancel").click( cancel );
    $("#delete").click( startAjax );
}

})(jQuery);
