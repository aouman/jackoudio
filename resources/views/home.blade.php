@extends('layouts.menu')
@section('content')
        <div class="hero position-relative">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 col-md-7 d-flex flex-column cta px-md-3 px-0 py-5">
                <p class=" mb-md-5 font-weight-bold display-4 avenirltstd-light"> <span class="font-weight-lighter"></span>Le corner Audioprothèse des Opticiens </p>
                <div class="text-left mt-md-5 my-4" id="contate">
                  <a href="#contact" class="avenirltstd-light text-decoration-none box-hover h-auto rounded-pill py-3 px-5 mt-3 mb-5 text-white btn-h btn-shadow">Nous contacter</a>
                </div>
              </div>
              <div class="col-12 col-md-5 image">
                <div class="telephone-image"></div>
              </div>
            </div>
          </div>
          <div class="wave d-md-block d-none">
            <img src="/images/wave.svg" alt="">
            <div class="spacer"></div>
          </div>
        </div>
      </section>

      <section class="container-fluid">
        <!--h2 class="avenirltstd-light text-uppercase text-title text-center pt-md-5 pb-4 mb-5">Comment ça marche ?</h2>
        <div class="row p-3">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <p class="h6 shadow-sm p-4 box-hover rounded-lg mb-4 bg-audio border text-white">Installation de la cabine au frais de Jack Audio</p>
            <p class="h6 shadow-sm p-4 box-hover rounded-lg mb-4 bg-audio border text-white bg">Formation des opticiens et de l’audioprothésiste</p>
            <p class="h6 shadow-sm p-4 box-hover rounded-lg mb-4 bg-audio border text-white">Gestion des dossiers de prise en charge</p>
          </div>
          <div class="col-md-4">
            <p class="h6 shadow-sm p-4 box-hover rounded-lg mb-4 bg-audio border text-white">Gestion des stocks</p>
            <p class="h6 shadow-sm p-4 box-hover rounded-lg mb-4 bg-audio border text-white">Présence d’un audioprothésiste D.E</p>
            <p class="h6 shadow-sm p-4 box-hover rounded-lg mb-4 bg-audio border text-white">Rétrocéssion du Chiffre d’Affaire généré.</p>
          </div>
          <div class="col-md-2"></div>
        </div-->
      </section>

      <section class="container-fluid mb-md-4">
        <h2 class="avenirltstd-light text-uppercase text-title text-center pt-md-5 pb-4 mb-5"> Nos avantages ?</h2>
        <div class="row p-md-3">
          <div class="col-md-12">
            <div class="card-deck">
              <div class="card border-0 text-center">
                <div class="text-center p-3">
                  <i class="icone-responsive fas fa-sync-alt i-fas mb-4 icone-color"></i>
                </div>
                <div class="card-body">
                  <h5 class="text-uppercase text-responsive">Synergie</h5>
                  <p class="py-3 px-1 text-responsive " style="margin-bottom: 31px;">Jack Audio partenariat avec les meilleurs marques Siemens et Starkey, les leaders</p>
                </div>
                <div class="card-footer bg-white text-center border-0 d-none">
                  <a href="#" class="py-2 px-3 rounded-pill bg-audio text-white mt-3 text-decoration-none">En savoir plus</a>
                </div>
              </div>
              <div class="card border-0 text-center">
                <div class="text-center p-3">
                  <i class="icone-responsive fas fa-chart-line i-fas mb-4 icone-color"></i>
                </div>
                <div class="card-body">
                  <h5 class="text-uppercase text-responsive text-break">Augmentation <br> du chiffre d'affaire</h5>
                  <p class="py-3 px-1 text-responsive ">Augmentation de l’attractivité de la boutique, une fidélisation des + de 60 ans, élargissement de la gamme de services</p>
                </div>
                <div class="card-footer bg-white text-center border-0 d-none">
                  <a href="#" class="py-2 px-3 rounded-pill bg-audio text-white mt-3 text-decoration-none">En savoir plus</a>
                </div>
              </div>
              <div class="card border-0 text-center">
                <div class="text-center p-3">
                  <i class="icone-responsive fas fa-folder-plus i-fas mb-4 icone-color"></i>
                </div>
                <div class="card-body">
                  <h5 class="text-uppercase text-responsive">Gestion de la vente d'audio prothèses</h5>
                  <p class="py-3 px-1 text-responsive ">Gestion complète et autonome de l’activité de la vente d’audioprotheses (normes, materiel, stock, gestion administrative)</p>
                </div>
                <div class="card-footer bg-white text-center border-0 d-none">
                  <a href="#" class="py-2 px-3 rounded-pill bg-audio text-white mt-3 text-decoration-none">En savoir plus</a>
                </div>
              </div>
              <div class="card border-0 text-center">
                <div class="text-center p-3">
                  <i class="icone-responsive fas fa-graduation-cap i-fas mb-4 icone-color"></i>
                </div>
                <div class="card-body">
                  <h5 class="text-uppercase text-responsive">Audioprothésiste diplômé</h5>
                  <p class="py-3 px-1 text-responsive ">Présence chez l’opticien d’un audioprothesiste diplomé à disposition ainsi que d’un personnel qualifié</p>
                </div>
                <div class="card-footer bg-white text-center border-0 d-none">
                  <a href="#" class="py-2 px-3 rounded-pill bg-audio text-white mt-3 text-decoration-none">En savoir plus</a>
                </div>
              </div>
              <div class="card border-0 text-center">
                <div class="text-center p-3">
                  <i class="icone-responsive fab fa-battle-net i-fas mb-4 icone-color"></i>
                </div>
                <div class="card-body">
                  <h5 class="text-uppercase text-responsive">Un réseau qui vous accompagne chaque jour.</h5>
                  <p class="py-3 px-1 text-responsive ">Présence chez l’opticien d’un audioprothesiste diplomé à disposition ainsi que d’un personnel qualifié</p>
                </div>
                <div class="card-footer bg-white text-center border-0 d-none">
                  <a href="#" class="py-2 px-3 rounded-pill bg-audio text-white mt-3 text-decoration-none">En savoir plus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="container-fluid py-5">
        <h2 class="avenirltstd-light text-uppercase text-title text-center pt-md-5 pb-4 mb-5">Un avantage concurrentiel certain</h2>
        <div class="row">
          <div class="col-md-6">
            <div class="p-4">
              <img src="/images/avantage.webp" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 height-responsive">
              <p class="text-responsive py-md-5">Proposez la double compétence: Celle d’opticien, et celle d’audioprothésiste. Les clients apprécieront la diversité et la praticité. Sachant que la vue et l’ouïe sont deux sens principaux, regrouper ces deux compétences au sein d’une même entité
représente réellement un plus. Non seulement en terme de satisfaction clients, mais également en terme de concurrence.
En tant qu’opticien vous proposez du sur-mesure. Pourquoi ne pas faire de même avec les prothèses auditives?</p>
            </div>
          </div>
        </div>
      </section>

      <hr class="w-25 mx-auto rounded-pill pre-border mb-md-5 d-none">
      <section class="container-fluid">
        <div class="row bg-hero pt-4 pb-5">
          <div class="col-md-12">
            <h2 class="avenirltstd-light text-uppercase p-5 text-title text-center">JackAudio partenaire avec les meilleures marques </h2>
          </div>
        </div>
        <div class="row position-relative bottom">
          <div class="col-md-2">
            <div class="shadow p-4 box-hover h6 shadow-sm p-4 text-center bg-white mb-3 rounded-lg">
              <div class="p-3">
                <img src="/images/Marque.jpg" alt="" class="img-fluid" width="100">
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="shadow p-3 box-hover text-center bg-white mb-3 rounded-lg">
              <div class="p-3">
                <img src="/images/Marque3.jpg" alt="" class="img-fluid" width="100">
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="shadow p-3 box-hover text-center bg-white mb-3 rounded-lg">
              <div class="p-3">
                <img src="/images/Marque4.png" alt="" class="img-fluid" width="100">
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="shadow p-3 box-hover text-center bg-white mb-3 rounded-lg">
              <div class="p-2">
                <img src="/images/Marque5.jpg" alt="" class="img-fluid" width="100">
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="shadow p-4 box-hover text-center bg-white mb-3 rounded-lg">
              <div class="p-2">
                <img src="/images/Marque6.jpg" alt="" class="img-fluid" width="90">
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="shadow p-4 box-hover text-center bg-white rounded-lg">
              <div class="">
                <img src="/images/logo-starkey.svg" alt="" class="" width="90">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--hr class="w-25 mx-auto rounded-pill pre-border">

      <section class="container-fluid"ededed>
        <div class="row bg-audio pt-4 pb-5">
          <div class="col-md-12">
            <h2 class="text-uppercase p-5 text-white text-center">Un concept innovant</h2>
          </div>
        </div>
        <div class="row bottom position-relative">
          <div class="col-md-12 d-flex flex-wrap">
            <div class="p-3 w-21">
              <div class="shadow text-center p-3 height-responsive bg-white rounded-lg h-box box-hover">
                <i class="fas fa-headphones-alt mb-4 i-fas bg-audio text-white"></i>
                <p class="h5 text-responsive">Un espace audio aménagé et équipé</p>
                <div class="p-3"></div>
              </div>
            </div>
            <div class="p-3 w-21">
              <div class="shadow text-center p-3 height-responsive bg-white rounded-lg h-box box-hover">
                <i class="fas fa-network-wired mb-4 i-fas bg-audio text-white"></i>
                <p class="h5 text-responsive">Un réseau qui vous accompagne chaque jour</p>
                <div class="p-1"></div>
              </div>
            </div>
            <div class="p-3 w-21">
              <div class="shadow text-center p-3 height-responsive bg-white rounded-lg h-box box-hover">
                <i class="fas fa-flask mb-4 i-fas bg-audio text-white"></i>
                <p class="h5 text-responsive">Des produits uniques</p>
                <div class="p-3"></div>
              </div>
            </div>
            <div class="p-3 w-21">
              <div class="shadow text-center p-3 height-responsive bg-white rounded-lg h-box box-hover">
                <i class="far fa-eye mb-4 i-fas bg-audio text-white"></i>
                <p class="h5 text-responsive">Une visibilité</p>
                <div class="p-3"></div>
              </div>
            </div>
            <div class="p-3 w-21">
              <div class="shadow text-center p-3 height-responsive bg-white rounded-lg h-box box-hover">
                <i class="fas fa-chart-area mb-4 i-fas bg-audio text-white"></i>
                <p class="h5 text-responsive">Un relais de croissance</p>
                <div class="p-3"></div>
              </div>
            </div>
          </div>
        </div>
      </section-->
      @include('includes.contact')

      <section class="container-fluid bg-light py-5 px-3">
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
              <p class="h6 font-weight-bold">JackAudio</p>
              <p>Email<br> contact@jackaudio.net</p>
              <p>Tel : 06 63 16 41 34</p>
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
      @endsection
