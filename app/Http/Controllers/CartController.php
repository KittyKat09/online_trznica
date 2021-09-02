<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
    public function add(Product $product) {

        //dodaj artikl u kosaricu
        Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));
        return redirect()->route('cart.index');
    }

    //prikaži sadržaj pojedine košarice
    public function index() {
        $cartItems = Cart::session(auth()->id())->getContent();
        return view('cart.index', compact(('cartItems')));
    }

    //izbriši proizvod u košarici
    public function removeItem($itemId)
    {
        $cartItems = Cart::session(auth()->id())->remove($itemId);
        return back();
    }

    //prikaži ispravnu količinu naručenog proizvoda
    public function update($rowId)
    {
        Cart::session(auth()->id())->update($rowId,[
            'quantity' => array(
                'relative' => false, //zapamti promjenu količine u bazi podataka
                'value' => request('quantity')
            )
        ]);
        return back();
    }

    public function checkout() {
        return view('cart.checkout');
    }
}
