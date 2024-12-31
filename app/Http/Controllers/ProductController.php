<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;

class ProductController extends Controller
{
    public function index(){
        $products = DB::table('products')->get();
        dd($products);
        return View("products.index");
    }

    public function create(){
        return "This is a form to create product from the controller";
    }

    public function store(){

    }

    public function show($product){
        // $product = DB::table('products')->where('id',$product)->get();
        // $product = DB::table('products')->where('id',$product)->first();
        $product = DB::table('products')->find($product);
        dd($product);
        return View("products.show");
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
