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
    <h4 class="mb-3">Podatci o narudžbi</h4>
    <form class="needs-validation" novalidate action="{{ route('orders.update', $order->id) }}" method="post">
    @csrf
    @method('PUT')

      <div class="mb-3">
        <label for="phone">Broj telefona primatelja</label>
        <input type="text" name="phone" value="{{ $order->phone }}" class="form-control" id="phone" placeholder="+385 ** *** ****" required>
        <div class="invalid-feedback">
          Molimo Vas, unesite Vaš broj telefona.
        </div>
      </div>

      <div class="mb-3">
        <label for="address">Ulica i kućni broj</label>
        <input type="text" name="address" value="{{ $order->address }}" class="form-control" id="address" placeholder="Vukovarska ulica 58" required>
        <div class="invalid-feedback">
          Molimo Vas, unesite Vašu adresu.
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="county">Županija</label>
          <select class="custom-select d-block w-100" name="county"  id="county" required>
            <option value="{{$order->county}}" selected>{{$order->county}}</option>
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
          <input type="text" class="form-control" name="postcode" value="{{ $order->postcode }}" id="postcode" placeholder="51 000" required>
          <div class="invalid-feedback">
            Molimo Vas, unesite Vaš poštanski broj.
          </div>
        </div>
        <div class="col-md-5 mb-3">
            <label for="city">Mjesto</label>
            <input type="text" class="form-control" name="city" value="{{ $order->city }}" id="city" placeholder="Rijeka" required>
            <div class="invalid-feedback">
              Molimo Vas, unesite Vaš grad.
            </div>
        </div>
        <div class="col-md-5 mb-3">
        <label for="status">Stanje</label>
          <select class="custom-select d-block w-100" name="status"  id="status" required>
            <option value="{{$order->status}}" selected>{{$order->status}}</option>
            <option value="processing">Zaprimljena</option>
            <option value="delivered">Dostavljena</option>
            <option value="sent">Poslana</option>
          </select>
          <div class="invalid-feedback">
            Molimo Vas, odaberite Vašu županiju.
          </div>
       </div>
        <div class="col-md-3 mb-3">
        <label for="paid">Plaćena</label>
          <select class="custom-select d-block w-100" name="paid"  id="paid" required>
            <option value="{{$order->paid}}" selected>{{$order->paid}}</option>
            <option value="1">Da</option>
            <option value="0">Ne</option>
          </select>
          <div class="invalid-feedback">
            Molimo Vas, odaberite Vašu županiju.
          </div>
        </div>
        <div class="col-md-7 mb-3">
            <label for="notes">Napomena</label>
            <textarea class="form-control" name="notes" id="notes" rows="3">{{ $order->notes }}</textarea>
        </div>
      </div>
      <hr class="mb-4">

      <h4 class="mb-3">Plaćanje</h4>

      <div class="d-block my-3">
        <div class="custom-control custom-radio">
          <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked disabled required>
          <label class="custom-control-label" for="credit">Plaćanje pouzećem</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" disabled required>
          <label class="custom-control-label" for="debit">Kreditna kartica</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" disabled required>
          <label class="custom-control-label" for="paypal">PayPal</label>
        </div>
      </div>
      <hr class="mb-4">
      <button class="btn btn-primary btn-lg btn-block" type="submit">Ažuriraj podatke</button>
    </form>
  </div>








  <div class="col-md-4 order-md-2 mb-4">



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
