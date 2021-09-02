@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('/css/carousel.css') }}" />



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Moja tržnica</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>


<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="card-img-top" src="{{ asset('pasnjak.jpg') }}" alt="Slika proizvoda." style="100vh;height:100vh;">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Prijavite se već danas.</h1>
            <p>Nestrpljivo Vas očekujemo. Prijavom u našu bazu podataka ostvarujete mnogobrojne pogodnosti.</p>
            <p><a class="btn btn-lg btn-primary" href="{{route('register')}}" role="button">Registriraj me</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="card-img-top" src="{{ asset('maslinik.jpg') }}" alt="Slika proizvoda." style="100vh;height:100vh;">
        <div class="container">
          <div class="carousel-caption">
            <h1>Pogledajte našu posebnu ponudu</h1>
            <p>Na našoj ćete stranici pronaći raznovrsne specijalitete Gorskog Kotara, Kvarnera i Like!</p>
            <p><a class="btn btn-lg btn-primary" href="{{route('section', 5)}}" role="button">Prikaži više</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="card-img-top" src="{{ asset('pecanje.jpg') }}" alt="Slika proizvoda." style="100vh;height:100vh;">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Svježa riba i meso garantiraju vrhunsku kvalitetu svakog jela!</h1>
            <p></p>
            <p><a class="btn btn-lg btn-primary" href="{{route('section', 2)}}" role="button">Prikaži više</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Naprijed</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Natrag</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="{{asset('mario.jpg')}}" alt="Avatar" style="width:200px; border-radius:50%">
        <h2>Mario</h2>
        <p>Naš web admin zaslužan je za tehničku podršku i promociju Vaših proizvoda.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="{{asset('ana.jpg')}}" alt="Avatar" style="width:200px; border-radius:50%">
        <h2>Ana</h2>
        <p>Pružamo Vam odličnu korisničku podršku kako bi Vam olakšali korištenje
            Aplikacije <a href="{{route('home')}}">Moja tržnica</a>, a to je zadatak naše Ane.

        </p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="{{asset('toni.jpg')}}" alt="Avatar" style="width:200px; border-radius:50%">
        <h2>Toni</h2>
        <p>Brine se da Vaša narudžba stigne u što kraćem roku na Vašu adresu.</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Voće i povrće</h2>
        <p class="lead">Pogledajte našu raznovrsnu ponudu voća i povrća.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit,
            tellus non tristique varius, enim elit cursus urna, vel vestibulum nunc libero sed orci.
            Cras tincidunt a purus ut condimentum. Pellentesque
             habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut venenatis efficitur vestibulum.
        </p>
      </div>
      <div class="col-md-5">
        <a href="{{route('section', 1)}}"><img src="{{asset('sec1.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"></a>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Meso i riba</h2>
        <p class="lead">S gorskih pašnjaka i našega mora.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
             Maecenas blandit, tellus non tristique varius, enim elit cursus urna, vel vestibulum nunc libero sed orci.
             Cras tincidunt a purus ut condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada
            fames ac turpis egestas. Ut venenatis efficitur vestibulum.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <a href="{{route('section', 2)}}"><img src="{{asset('sec2.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"></a>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Mlijeko, jaja i mliječni proizvodi.</h2>
        <p class="lead">Prirodan izvor kalcija i magnezija, svako jutro svježe mlijeko i jaja na Vašem stolu.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit, tellus non tristique varius, enim elit cursus urna,
            vel vestibulum nunc libero sed orci. Cras tincidunt a purus ut condimentum.
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut venenatis efficitur vestibulum.</p>
      </div>
      <div class="col-md-5">
        <a href="{{route('section', 3)}}"><img src="{{asset('sec3.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"></a>
    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Žitarice i njihove prerađevine.</h2>
          <p class="lead">Nudimo Vam svježe mljeveno brašno naših dobavljača. Za najljepše kolače i tjesteninu!
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit, tellus non tristique varius,
            enim elit cursus urna, vel vestibulum nunc libero sed orci. Cras tincidunt a purus ut condimentum.
            Pellentesque habitant morbi tristique senectus et netus et malesuada
             fames ac turpis egestas. Ut venenatis efficitur vestibulum.
          </p>
        </div>
        <div class="col-md-5 order-md-1">
            <a href="{{route('section', 4)}}"><img src="{{asset('sec4.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"></a>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Posebna ponuda</h2>
          <p class="lead">Domaći voćni sirupi, čokolada s lavandom, med, bademi... i još mnogo drugih delicija dio je naše posebne ponude.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas blandit, tellus non tristique varius, enim elit cursus urna,
            vel vestibulum nunc libero sed orci. Cras tincidunt a purus ut condimentum. Pellentesque habitant morbi tristique senectus et
            netus et malesuada fames ac turpis egestas.
            Ut venenatis efficitur vestibulum.
          </p>
        </div>
        <div class="col-md-5">
            <a href="{{route('section', 5)}}"><img src="{{asset('sec5.jpg')}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"></a>
        </div>
      </div>

      <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Povratak na vrh</a></p>
    <p>&copy; 2021 Moja tržnica &middot; <a href="#">Kontakt</a> &middot; <a href="#">Služba za korisnike</a></p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>

@endsection
