<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('/products/list', ['allProducts' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'unit' => 'required'
        ]);


        $product = new Product();

        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->unit = $request->input('unit');

        $product->owner_id = Auth::id();;

        $product->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.information', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'unit' => 'required'
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
                        ->with('success','Uspješno ste uredili podatke o proizvodu.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success','Proizvod je uspješno uklonjen iz baze podataka.');
    }

    public function orderby(Request $request)
    {
        $filter = $request->category;
        if ($filter == "1") {
            $products= Product::orderBy('price', 'asc')->get();
        } elseif ($filter == "2") {
            $products= Product::orderBy('price', 'desc')->get();
        } elseif ($filter == "3") {
            $products= Product::orderBy('name', 'asc')->get();
        } elseif ($filter == "4") {
            $products= Product::orderBy('name', 'desc')->get();
        } elseif ($filter == "5") {
            $products= Product::orderBy('id', 'desc')->get();
        } elseif ($filter == "6") {
            $products= Product::orderBy('price', 'asc')->get();
        }
        return view('/products/list', ['allProducts' => $products]);
    }

    public function section($no)
    {
        if ($no == 1) {
            $products = Product::where('category', 'sec1')->get();
            return view('/products/list', ['allProducts' => $products]);
        } elseif ($no == 2) {
            $products = Product::where('category', 'sec2')->get();
            return view('/products/list', ['allProducts' => $products]);
        } elseif ($no == 3) {
            $products = Product::where('category', 'sec3')->get();
            return view('/products/list', ['allProducts' => $products]);
        } elseif ($no == 4) {
            $products = Product::where('category', 'sec4')->get();
            return view('/products/list', ['allProducts' => $products]);
        } elseif ($no == 5) {
            $products = Product::where('category', 'sec5')->get();
            return view('/products/list', ['allProducts' => $products]);
        }
    }

    public function myproducts()
    {
        $products = Product::where('owner_id', Auth::user()->id)->get();

        return view('/products/list', ['allProducts' => $products]);
    }

}
