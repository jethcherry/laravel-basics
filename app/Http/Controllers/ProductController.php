<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }


    public function create(){
        return View('products.create');
    }

    public function store(){
        // dd(request(),request()->title,request()->all());
        // $product = Product::create([
        //     'title'=> request()->title,
        //     'description'=>request()->description,
        //     'price'=>request()->price,
        //     'stock'=>request()->stock,
        //     'status'=>request()->status
        // ]);
        $product =Product::create(request()->all());
        return $product;
    }

    // public function show($product)
    // {
    // // Fetch the product using the Eloquent model
    // $product = Product::findOrFail($product);

    // // $subtitle = '<h1>Something</h1>'; // Example subtitle

    // // Pass data to the view using compact
    // return view('products.show', compact('product', 'subtitle'));
    // }

   public function show($product)
   {
    // Fetch the product using the Eloquent model
    $product = Product::findOrFail($product);
    // Pass data to the view using compact
    return view('products.show', compact('product'));
  }

    public function edit($product){
        return View('products.edit')->with([
            'product'=>Product::findOrFail($product),
        ]);
    }

    public function update($product){
        $product=Product::findOrFail($product);
        $product->update(request()->all());
        return $product;
    }

    public function destroy($product){
        return "";
    }
}
