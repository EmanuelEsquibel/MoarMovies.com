;(function(){
  $(document).ready( start );
  function start() {
    //Get data and display in table
    function getJson(){
      //Refresh data
      $("#dataTable").empty();
      var route = "http://localhost/laravel/public/listGenres";
      $.get( route, function( data ) {
        $( data ).each( function(key, res){
          $(".orangeTable tbody").append(
            //Input Delete
            "<tr><td>" + res.genre + "</td> <td><input type='button' name= " + res.id + " value='Delete' class='deleteButton'> " +
            //Input Update
            " <input type='button' name=" + res.id + " value='Update' class='updateButton'></td></tr>"
          );
        });
        deleteGenreEvents();
        updateGenreEvents();
      });
    }
    /* ---------------------------------------------------------------------- */
    //Ejecute showCW.
    function deleteGenreEvents(){
      $(".deleteButton").each(function(){
        $(this).click(function(){
          showCW( $(this) );
        });
      });
    }
    //Show confirmation Window
    function showCW( button ){
        if( cwDeleteIsActive() || updateWindowsIsActive() ){

        } else {
          $("#spanGenre").text( button.parent().parent().children("td:nth-child(1)").text() );
          $("#delete").attr("name", button.attr("name") );
          //Styles
          $(".confirmateDelete").css("display", "block");
          $(".confirmateDelete").css("background-color", "#638cb5");
        }
    }
    //Confirmation windows delete is active
    function cwDeleteIsActive(){
      if( $(".confirmateDelete").css("display") == "block" ) {
        $("#pleaseSelect").get(0).currentTime = 0;
        $("#pleaseSelect").get(0).play();
        $(".confirmateDelete").css("background-color", "red");
        //Efect error with colour
        function colour(){
          $(".confirmateDelete").css("background-color", "#638cb5");
        }
        setTimeout( colour , 100 );
        //Is active
        return true;
      } else {
        //Isnt active
        return false;
      }
    }
    //Delete an genre
    function deleteGenre(){
      hiddenAlert();
      var url = "http://localhost/laravel/public/genders/" + $("#delete").attr("name");
      var token = $("#token").val();
      $.ajax({
        url: url,
        headers: {'X-CSRF-TOKEN': token },
        type: 'DELETE',
        dataType: 'json',
        // data: {
        //   id: $("#delete").attr("name"),
        // },
        complete: function(){
          getJson();
        }
      });
    }
    function hiddenAlert(){
       $(".confirmateDelete").css("display", "none");
    }
    //Events
    getJson();
    $("#cancel").click( hiddenAlert );

    $("#delete").click( deleteGenre );
    /* ---------------------------------------------------------------------- */
    //Update an genre
    //Confirmation windows is active
    function updateWindowsIsActive(){
      if( $(".updateGenre").css("display") == "block" ) {
        $("#pleaseSelect").get(0).currentTime = 0;
        $("#pleaseSelect").get(0).play();
        $(".updateGenre").css("background-color", "red");
        //Efect error with colour
        function colour(){
          $(".updateGenre").css("background-color", "#638cb5");
        }
        setTimeout( colour , 100 );
        //Is active
        return true;
      } else {
        //Isnt active
        return false;
      }
    }

    function updateGenreEvents(){
      $(".updateButton").each(function(){
        $(this).click(function(){
          if( cwDeleteIsActive() || updateWindowsIsActive() ) {
          } else {
            nameGenre = $(this).parent().parent().children("td:nth-child(1)").text();
            $(".updateGenre").show();
            $("#spanGenreUpdate").text( nameGenre );
            $(".genreValue").val( nameGenre );
            $("#updateGenreButton").attr("name", $(this).attr("name") );
          }
        });
      });
    }

    function updateGenreAction(){
      hiddenAlert();
      var url = "http://localhost/laravel/public/genders/" + $("#updateGenreButton").attr("name");
      var token = $("#token").val();
      $.ajax({
        url: url,
        headers: {'X-CSRF-TOKEN': token },
        type: 'PUT',
        dataType: 'json',
        data: {
          // id: $("#updateGenreButton").attr("name"),
          genre: $(".genreValue").val(),
        },
        complete: function(){
          hiddenAlertUpdate();
          getJson();
        }
      });
    }
    function hiddenAlertUpdate(){
      $(".updateGenre").css("display", "none");
    }
    $("#cancelUpdate").click( hiddenAlertUpdate );
    $("#updateGenreButton").click( updateGenreAction );
  }
})(jQuery);
