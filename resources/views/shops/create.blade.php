@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('/css/form-validation.css') }}" />


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Checkout example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

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
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
  <div class="container">


<div class="row">
 <div class="col-md-8 order-md-1">
    <h4 class="mb-3">Podatci o Vašem obrtu</h4>
    <form class="needs-validation" novalidate action="{{route('shops.store')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="name">Naziv obrta</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="" required>
        <div class="invalid-feedback">
          Molimo Vas, unesite ime Vašega obrta.
        </div>
      </div>

      <div class="mb-3">
        <label for="phone">Broj telefona</label>
        <input type="text" name="phone" class="form-control" id="phone" placeholder="+385 ** *** ****" required>
        <div class="invalid-feedback">
          Molimo Vas, unesite Vaš broj telefona.
        </div>
      </div>

      <div class="mb-3">
        <label for="address">Adresa obrta</label>
        <input type="text" name="address" class="form-control" id="address" placeholder="Vukovarska ulica 58" required>
        <div class="invalid-feedback">
          Molimo Vas, unesite Vašu adresu.
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="county">Županija</label>
          <select class="custom-select d-block w-100" name="county" id="county" required>
            <option value="" selected disabled>Odaberite</option>
            <option value="Istarska">Istarska</option>
            <option value="Ličko-senjska">Ličko-senjska</option>
            <option value="Primorsko-goranska">Primorsko-goranska</option>
          </select>
          <div class="invalid-feedback">
            Molimo Vas, odaberite Vašu županiju.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="postcode">Poštanski broj</label>
          <input type="text" class="form-control" name="postcode" id="postcode" placeholder="51 000" required>
          <div class="invalid-feedback">
            Molimo Vas, unesite Vaš poštanski broj.
          </div>
        </div>
        <div class="col-md-5 mb-3">
            <label for="city">Mjesto</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Rijeka" required>
            <div class="invalid-feedback">
              Molimo Vas, unesite Vaš grad.
            </div>
        </div>
        <div class="col-md-5 mb-3">
            <label for="description">Kratak opis Vašeg obrta</label>
            <textarea class="form-control" name="description" id="" rows="3"></textarea>
        </div>
      </div>
      <hr class="mb-4">


      <button class="btn btn-primary btn-lg btn-block" type="submit">Potvrdi registraciju</button>
    </form>
  </div>

  <div class="col-md-4 order-md-2 mb-4">
    <img src={{ asset('nova-trgovina.jpg') }} width="400" height="590">
  </div>
</div>

<footer class="container">
    <p class="float-right"><a href="#">Povratak na vrh</a></p>
    <p>&copy; 2021 Moja tržnica &middot; <a href="#">Kontakt</a> &middot; <a href="#">Služba za korisnike</a></p>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="form-validation.js"></script></body>
</html>




@endsection
