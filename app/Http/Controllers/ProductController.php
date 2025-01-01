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
        return View("products.index");
    }

    public function create(){
        return "This is a form to create product from the controller";
    }

    public function store(){

    }

    public function show($product)
    {
    // Fetch the product using the Eloquent model
    $product = Product::findOrFail($product);

    $subtitle = '<h1>Something</h1>'; // Example subtitle

    // Pass data to the view using compact
    return view('products.show', compact('product', 'subtitle'));
    }


    public function edit($product){
        return "Showing the form to edit the product {$product}";
    }

    public function update($product){
        return "";
    }

    public function destroy($product){
        return "";
    }
}
