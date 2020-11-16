<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  </head>
  <body>
    <div class="main-content">

      <header style="background: #bee8f5;">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#">
            <img class="logo-short" src="/images/logo1.png" alt="Logo" style="width: 200px;">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse flex-column" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item mr-3 ml-3 active">
                <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item mr-3 ml-3">
                <a href="#" class="nav-link">Espace clients</a>
              </li>
              <li class="nav-item mr-3 ml-3">
                <a href="#" class="nav-link">Espace pharmaciens</a>
              </li>
              <li class="nav-item mr-3 ml-3">
                <a href="#" class="nav-link">Trouvé votre carré</a>
              </li>
              <li class="nav-item mr-3 ml-3">
                <a href="#" class="nav-link">Réjoignez nous</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>




      <section class="container-fluid bg-light py-5 px-3">
        <h2 class="text-uppercase p-5 text-title text-center">Contactez-nous</h2>
        <div class="row">
          <div class="col-md-12 d-md-flex justify-content-center">
            <div class="p-3">
              <p class="h6 font-weight-bold">Ménilmontant Optique</p>
              <p>148 boulevard <br> de Ménilmontant 75020</p>
              <p>Tel : 01 47 97 03 81</p>
            </div>
            <div class="p-3">
              <p class="h6 font-weight-bold">Optical</p>
              <p>13 Rue Miriam Makeba <br> 93000 Bobigny</p>
              <p>Tel : 01 70 26 04 45</p>
            </div>
            <div class="p-3">
              <p class="h6 font-weight-bold">Ménilmontant Optique</p>
              <p>148 boulevard <br> de Ménilmontant 75020</p>
              <p>Tel : 01 47 97 03 81</p>
            </div>
            <div class="p-3">
              <p class="h6 font-weight-bold">Ménilmontant Optique</p>
              <p>148 boulevard <br> de Ménilmontant 75020</p>
              <p>Tel : 01 47 97 03 81</p>
            </div>
            <div class="p-3">
              <p class="h6 font-weight-bold">Ménilmontant Optique</p>
              <p>148 boulevard <br> de Ménilmontant 75020</p>
              <p>Tel : 01 47 97 03 81</p>
            </div>
          </div>
        </div>
      </section>

      <section class="container-fluid">
        <footer class="row bg-dark">
          <div class="col-md-12">
            <p class="p-4 text-white">© Copyright 2020 Jackaudio – Politique de confidentialité – Une création de Locelot</p>
          </div>
        </footer>
      </section>


      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script>
      $(document).ready(function() {
        $(window).bind('scroll', function() {
          var navHeight = $(window).height() - 90;
          if ($(window).scrollTop() > navHeight) {
            $('nav').addClass('fixed');
          } else {
            $('nav').removeClass('fixed');
          }
        });
      });
      </script>
      </body>
</html>
