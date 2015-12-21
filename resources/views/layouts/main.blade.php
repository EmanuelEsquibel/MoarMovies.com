<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>MoarMovies.com</title>
  <!-- <link rel="stylesheet" href="../public/css/index.css" media="screen" title="index" charset="utf-8"> -->
  {!!Html::style('../public/css/index.css')!!}
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <base href="http://localhost/laravel/public/">
</head>
<body>
    <div class="title">
      <h1>MoarMovies.com</h1>
    </div>
    <div id="navMenu">
      <div class="divUl">
        <ul>
          <li><a href="index" id="index"> Index </a></li>
          <li><a href="contact" id="contact"> Contact </a></li>
          <li><a href="reviews" id="reviews"> Reviews </a></li>
        </ul>
      </div>
      <div class="search">
        <img src="../public/icons/zoom3.png" width="20" alt=""/>
        <input type="text" name="name" placeholder="" class="searchInput">
      </div>
    </div>
    <div class="containerIndex">
      <div class="index">

        @yield('content')

      </div>
    </div>
  <br>
  <div class="sectionMovies">
    <img src="../public/images/caratulas.jpg" alt="img" width="90"/>
    <img src="../public/images/caratulaMalefica.jpg" alt="img" width="90"/>
    <img src="../public/images/caratulas.jpg" alt="img" width="90"/>
    <img src="../public/images/caratulaMalefica.jpg" alt="img" width="90"/>
    <img src="../public/images/caratulas.jpg" alt="img" width="90"/>
    <img src="../public/images/caratulaMalefica.jpg" alt="img" width="90"/>
    <img src="../public/images/caratulas.jpg" alt="img" width="90"/>
    <img src="../public/images/caratulaMalefica.jpg" alt="img" width="90"/>
    <img src="../public/images/caratulas.jpg" alt="img" width="90"/>
  </div>
  <br>
  <div class="footer">
    <br>
    <div class="contentFooter">
      Idiomas
      <a href="#">Español</a>
      <a href="#">English</a>
    </div>
  </div>
  <noscript>
    Atencion, tu navegador no soporta Javascript o no lo tienes activado.
  </noscript>
<script src="../public/js/linkClicked.js" charset="utf-8"></script>
</body>
</html>
