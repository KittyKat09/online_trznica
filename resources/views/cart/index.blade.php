@extends('layouts.app')

@section('content')
    <h2>Moja košarica</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Ime</th>
                    <th>Cijena</th>
                    <th>Količina</th>
                    <th>Ukloni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                <tr>
                    <td scope="row">{{ $item->name }}</td>
                    <td>
                        {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}} kn
                    </td>
                    <td>
                        <form action="{{route('cart.update', $item->id)}}">
                            <input name="quantity" type="number" value = {{ $item->quantity }} min="1"
                                max="{!! App\Models\Product::findOrFail($item->id)->quantity-App\Models\Product::findOrFail($item->id)->ordered; !!}" step="1">
                            <input type="submit" value="Spremi">
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('cart.remove', $item->id) }}">Obriši</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h3>
            Ukupan iznos: {{Cart::session(auth()->id())->getTotal()}} kn
        </h3>
        @if (Cart::session(auth()->id())->getTotal() > 0)
        <a name="" id="" class="btn btn-primary" href="{{ route('cart.checkout') }}" role="button">Plati račun</a>
        @endif
@endsection

