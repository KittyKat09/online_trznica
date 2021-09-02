<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return view('orders.list', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Order $order)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cartItems = Cart::session(auth()->id())->getContent();
        $data = array();
        $i = 0;
        foreach ($cartItems as $item) {
            $data[$i][0] = $item->id;
            $data[$i][1] = $item->name;
            $data[$i][2] = $item->price;
            $data[$i][3] = $item->quantity;

            DB::table('products')->where('id', $item->id)->increment('ordered', $item->quantity);

            $i++;
        }

        $request->validate([
            'phone' => 'required',
            'address' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'county' => 'required',
        ]);

        $order = new Order();

        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->postcode = $request->input('postcode');
        $order->city = $request->input('city');
        $order->county = $request->input('county');
        $order->content = json_encode($data);
        $order->total = Cart::session(auth()->id())->getTotal();
        $order->user_id = auth()->id();

        $order->save();

        Cart::session(auth()->id())->clear();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'phone' => 'required',
            'address' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'county' => 'required',
            'status' => 'required',
            'paid' => 'required'
        ]);

        $order->update($request->all());

        if ($order->status == "sent" || $order->status == "delivered") {
            foreach (json_decode($order->content) as $item) {
                $product = Product::findOrFail($item[0]);
                $product->quantity = $product->quantity - $item[3];
                $product->ordered = $product->ordered - $item[3];
                $product->save();
            }
        }

        return redirect()->route('orders.index')
                        ->with('success','Podatci uspješno promijenjeni.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')
                        ->with('success','Order deleted successfully');
    }


}
