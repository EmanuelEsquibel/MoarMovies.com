window.addEventListener("load", start, false);

function start(){
  var index = document.getElementById('index'),
      contact = document.getElementById('contact'),
      reviews = document.getElementById('reviews');

  if ( location.href == "http://localhost/laravel/public/index" ){
    index.className  = "focusIndex";
  } else if ( location.href == "http://localhost/laravel/public/contact" ) {
    contact.className = "focusContact";
  } else if ( location.href == "http://localhost/laravel/public/reviews" ){
    reviews.className = "focusReviews";
  }

}
