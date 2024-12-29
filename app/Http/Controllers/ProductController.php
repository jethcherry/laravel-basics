<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return View("product.index");
    }

    public function create(){
        return "This is a form to create product from the controller";
    }

    public function store(){

    }

    public function show($product){
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
