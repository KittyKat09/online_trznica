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
 <div class="col-md-7 order-md-1">
    <h4 class="mb-3">Podatci o Vašem proizvodu</h4>
    <form class="needs-validation" novalidate action="{{ route('products.update',$product->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name">Naziv proizvoda</label>
        <input type="text" name="name" value="{{ $product->name }}" class="form-control" id="name" placeholder="" required>
        <div class="invalid-feedback">
          Molimo Vas, ispunite ovo polje.
        </div>
      </div>



      <div class="row">
        <div class="col-md-4 mb-3">
            <label for="price">Cijena (kn)</label>
            <input type="number" value="{{ $product->price }}" required class="form-control" name="price" id="" min="0" step="0.01" aria-describedby="helpId" placeholder="">
            <div class="invalid-feedback">
              Molimo Vas, ispunite ovo polje.
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="unit">Proizvod prodajem po:</label>
            <select class="custom-select d-block w-100" name="unit" id="unit" required>
              <option value="{{$product->unit}}" selected>{{$product->unit}}</option>
              <option value="kg">kg</option>
              <option value="kom">kom</option>
              <option value="L">L</option>
          </select>
            <div class="invalid-feedback">
              Molimo Vas, ispunite ovo polje.
            </div>
          </div>

        <div class="col-md-4 mb-3">
            <label for="quantity">Količina u skladištu</label>
            <input type="number" value="{{ $product->quantity }}" required class="form-control" name="quantity" id="" min="0" step="1" aria-describedby="helpId" placeholder="">
            <div class="invalid-feedback">
              Molimo Vas, ispunite ovo polje.
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <label for="category">Kategorija</label>
            <select class="custom-select d-block w-100" name="category" id="category" required>
              <option value="{{$product->category}}" selected>{{$product->category}}</option>
              <option value="sec1">Voće i povrće</option>
              <option value="sec2">Meso i plodovi mora</option>
              <option value="sec3">Mlijeko i mliječni proizvodi</option>
              <option value="sec4">Brašno, žitarice i njihovi proizvodi</option>
              <option value="sec5">Orašasti plodovi, med, prirodni sokovi...</option>
          </select>
            <div class="invalid-feedback">
              Molimo Vas, odaberite kategoriju u koju bi svrstali Vaš proizvod.
            </div>
          </div>

        <div class="col-md-6 mb-3">
            <label for="description">Kratak opis proizvoda</label>
            <textarea class="form-control" name="description" id="" rows="2">{{ $product->description }}</textarea>
        </div>
      </div>
      <hr class="mb-4">



      <button class="btn btn-primary btn-lg btn-block" type="submit">Ažuriraj podatke</button>
    </form>
  </div>








  <div class="col-md-4 order-md-2 mb-4">
    <img src={{ asset('sec1.jpg') }} width="400" height="400">
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
