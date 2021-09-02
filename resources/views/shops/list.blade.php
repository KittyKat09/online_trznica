@extends('layouts.app')


@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Trgovine</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

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
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Naše trgovine</h1>
      <p class="lead text-muted">
        Ovo je lista malih obiteljskih OPG-ova koji nas s
        radošću opskrbljuju svježim voćem i povrćem, mlijekom s
        goranskih pašnjaka bogatih nuritivnih vrijednosti
        i mesom vrhunske kvalitete. Tu su posebne autohtone
        poslastice s daškom mediterana. Kliknite ispod fotografije trgovine
        za više informacija.
      </p>
      <p>

  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        @foreach ($shops as $shop)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="{{ asset('trgovina.jpg') }}" alt="Card image cap" width="400px" height="400px">
            <div class="card-body">
              <p class="card-title">{{ $shop->name }}</p>
              <p class="card-title">       </p>
              <p class="card-text">{{ $shop->description }}</p>


              <a href="{{ route('shops.show-products', $shop->id) }}" class="card-link">Prikaži proizvode</a>


              <div class="d-flex justify-content-between align-items-center">

                @auth
                @if (auth()->user()->role == "admin")
                <div class="btn-group">
                    <form action="{{ route('shops.destroy', $shop->id) }}" method="POST">
                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('shops.edit', $shop->id) }}">Uredi</a>
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-sm btn-outline-secondary">Izbriši</button>
                </form>
                </div>
                @endif
                @endauth


                <small class="text-muted">
                    {{$shop->address}}, <br>
                    {{$shop->postcode}} {{$shop->city}}, <br>
                    Kontakt: {{$shop->phone}}
                </small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

</main>

<footer class="container">
    <p class="float-right"><a href="#">Povratak na vrh</a></p>
    <p>&copy; 2021 Moja tržnica &middot; <a href="#">Kontakt</a> &middot; <a href="#">Služba za korisnike</a></p>
  </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>

@endsection
