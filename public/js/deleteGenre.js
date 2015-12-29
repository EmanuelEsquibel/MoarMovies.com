;(function(){
  $(document).ready( start );
  function start() {

    function getJson(){
      $("#dataTable").empty();
      var route = "http://localhost/laravel/public/listGenres";
      $.get( route, function( data ) {
        $( data ).each( function(key, res){
          $(".orangeTable tbody").append(
            "<tr><td>" + res.genre + "</td> <td><input type='button' name= " + res.id + " value='Delete' class='deleteButton'></td></tr>" );
        });
        loadGenres();
      });
    }

    function loadGenres(){
      $(".deleteButton").each(function(){
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
    }

    function hiddenAlert(){
      $(".confirmateDelete").css("display", "none");
    }

    function deleteGenre(){
      hiddenAlert();
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
        complete: function(){
          getJson();
        }
      });
    }
    getJson();
    $("#cancel").click( hiddenAlert );
    $("#delete").click( deleteGenre );
  }
})(jQuery);
