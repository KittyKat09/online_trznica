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
    <title>Album example · Bootstrap</title>

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
      <h1>Lista proizvoda</h1>
      <p class="lead text-muted">
          Naša raznovrsna ponuda zadovoljit će
          i one najzahtjevnije. Kliknite na link ispod fotografije za
          više informacija o proizvodu.
      </p>
      <p>




        <form method="get" action="{{route('products.filterby')}}">
            @csrf
             <select name="category" value>
              <option value="" disabled selected></option>
              <option value="1">od najjeftinijeg do najskupljeg</option>
              <option value="2">od najskupljeg do najjeftinijeg</option>
              <option value="3">abecednim redom, A-Ž</option>
              <option value="4">abecednim redom, Ž-A</option>
              <option value="5">od najnovijeg do najstarijeg</option>
              <option value="6">od najstarijeg do najnovijeg</option>
             </select>
             <button type="submit">Primijeni</button>
        </form>

  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        @foreach ($allProducts as $item)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            @if ($item->id == 11)
            <img class="card-img-top" src="{{ asset('jabuka-zelena.jpg') }}" alt="Slika proizvoda.">
            @elseif ($item->id == 12)
            <img class="card-img-top" src="{{ asset('jagode.jpg') }}" alt="Slika proizvoda.">
            @elseif ($item->id == 13)
            <img class="card-img-top" src="{{ asset('jaja.jpg') }}" alt="Slika proizvoda.">
            @elseif ($item->id == 14)
            <img class="card-img-top" src="{{ asset('kukuruz.jpg') }}" alt="Slika proizvoda.">
            @elseif ($item->id == 15)
            <img class="card-img-top" src="{{ asset('sir.jpg') }}" alt="Slika proizvoda.">
            @elseif ($item->id == 16)
            <img class="card-img-top" src="{{ asset('sok-bazga.jpg') }}" alt="Slika proizvoda.">
            @elseif ($item->id == 17)
            <img class="card-img-top" src="{{ asset('med.jpg') }}" alt="Slika proizvoda.">
            @elseif ($item->id == 18)
            <img class="card-img-top" src="{{ asset('sok-naranca.jpg') }}" alt="Slika proizvoda.">
            @elseif ($item->id == 19)
            <img class="card-img-top" src="{{ asset('pastrva.jpg') }}" alt="Slika proizvoda.">
            @elseif ($item->id == 20)
            <img class="card-img-top" src="{{ asset('orasi.jpg') }}" alt="Slika proizvoda.">
            @elseif ($item->id == 21)
            <img class="card-img-top" src="{{ asset('brasno.jpg') }}" alt="Slika proizvoda.">
            @elseif ($item->id == 22)
            <img class="card-img-top" src="{{ asset('spinat.jpg') }}" alt="Slika proizvoda.">
            @elseif ($item->id == 23)
            <img class="card-img-top" src="{{ asset('dagnje.jpg') }}" alt="Slika proizvoda.">
            @elseif ($item->id == 24)
            <img class="card-img-top" src="{{ asset('rajcica.jpg') }}" alt="Slika proizvoda.">
            @elseif ($item->id == 25)
            <img class="card-img-top" src="{{ asset('ulje-maslinovo.jpg') }}" alt="Slika proizvoda.">
            @elseif ($item->id == 26)
            <img class="card-img-top" src="{{ asset('cikla.jpg') }}" alt="Slika proizvoda.">
            @else
            <img class="card-img-top" src="{{ asset('slika.png') }}" alt="Slika proizvoda.">
            @endif
            <div class="card-body">
              <p class="card-title">{{ $item->name }}</p>
              <p class="card-title">{{ $item->price }} kn/{{$item->unit}}</p>
              <p class="card-text">{{ $item->description }}</p>



              <a href="{{ route('cart.add', $item->id) }}" class="card-link">Dodaj u košaricu</a>



              <div class="d-flex justify-content-between align-items-center">


                <div class="btn-group">
                    @auth
                    <form action="{{ route('products.destroy', $item->id) }}" method="POST">


                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('products.show', $item->id) }}">Prikaži više</a>

                    @if (auth()->user()->role == "admin")
                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('products.edit', $item->id) }}">Uredi</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-sm btn-outline-secondary">Ukloni</button>
                    @endif
                    @endauth
                </form>
                </div>


                <small class="text-muted"></small>
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
