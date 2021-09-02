@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('/css/form-validation.css') }}" />

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista narudžbi</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Broj narudžbe</th>
            <th scope="col">Status</th>
            <th scope="col">Plaćena</th>
            <th scope="col">Akcija</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($orders as $order)

        <tr>
            <th scope="row">{{ $order->id }}</th>
            <td>
                @if ($order->status == 'processing')
                    Zaprimljena
                @elseif ($order->status == 'sent')
                    Poslana
                @elseif ($order->status == 'delivered')
                    Dostavljena
                @endif
            </td>
            <td>
                @if ($order->paid)
                    Da
                @else
                    Ne
                @endif
            </td>
            <td>
                <form action="{{ route('orders.destroy',$order->id) }}" method="POST">


                    <a class="btn btn-primary" href="{{ route('orders.edit', $order->id) }}">Prikaži više</a>

                    <a class="btn btn-primary" href="{{ route('print', $order->id) }}">Ispiši račun</a>



                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Ukloni</button>
                </form>
            </td>
        </tr>


        @endforeach
        </tbody>
    </table>

@endsection
