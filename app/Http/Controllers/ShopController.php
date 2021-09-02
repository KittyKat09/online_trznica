<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::all();

        return view('shops.list', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/shops/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            'county' => 'required',
            'phone' => 'required'
        ]);


        $shop = new Shop();

        $shop->name = $request->input('name');
        $shop->address = $request->input('address');
        $shop->city = $request->input('city');
        $shop->county = $request->input('county');
        $shop->postcode = $request->input('postcode');
        $shop->phone = $request->input('phone');
        $shop->description = $request->input('description');

        $shop->user_id = Auth::id();;

        $shop->save();


        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $shops = Shop::where('user_id', Auth::user()->id)->get();

        return view('shops.list', compact('shops'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        return view('shops.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            'county' => 'required',
            'phone' => 'required'
        ]);

        $shop->update($request->all());

        return redirect()->route('shops.index')
                        ->with('success','Podatci uspješno promijenjeni.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        $shop->delete();

        return redirect()->route('shops.index')
                        ->with('success','Order deleted successfully');
    }

    public function showproducts($shopid)
    {

        $owner = Shop::where('id','=', $shopid)
        ->first();

        $allProducts = Product::where('owner_id','=', $owner->user_id)
        ->get();

        return view('products.list', compact('allProducts'));
    }

}
