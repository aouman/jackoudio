<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/client.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  </head>
  <body>
    <div class="main-content">
      <section class="">
        <header class="w-100 position-absolute" style="background-color: #fffc;top: 0; z-index: 500;">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/">
              <img class="logo-short" src="/images/logo.png" alt="Logo" style="width: 120px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item mr-3 ml-3 avenirltstd-light">
                  <a class="nav-link text-responsive" href="/">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-3 ml-3 avenirltstd-light">
                  <a href="/vous-etes-opticien" class="nav-link text-responsive">Vous êtes opticien ?</a>
                </li>
                <li class="nav-item mr-3 ml-3 avenirltstd-light">
                  <a href="/espace-franchise" class="nav-link text-responsive">Espace franchise</a>
                </li>
                <li class="nav-item mr-3 ml-3 text-responsive avenirltstd-light">
                  <a href="/trouver-un-centre" class="nav-link">Trouver un centre</a>
                </li>
                <!--li class="nav-item mr-3 ml-3">
                  <a href="#" class="nav-link">Réjoignez nous</a>
                </li-->
              </ul>
            </div>
          </nav>
        </header>

        @yield('content')

        <section class="container-fluid">
          <footer class="row bg-dark">
            <div class="col-md-12">
              <p class="p-4 text-white">© Copyright <span id="year">2019</span> Jackaudio – Politique de confidentialité</p>
            </div>
          </footer>
        </section>


      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script>
      /*COPYRIGTH SCRIPT*/
      var date = new Date();
      var annee = date.getFullYear();
      document.getElementById('year').innerHTML = annee;
      </script>
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

      <script>
        /*lorsqu'on clique sur l'un des bouton du menu elle s'active*/
        $('.navbar-nav .navs a').on('click', function (e) {
            e.preventDefault();
            var me = $(this).parent().toggleClass('active')
            $(".active").not(me).removeClass('active')
        });
      </script>

    </body>
  </html>
