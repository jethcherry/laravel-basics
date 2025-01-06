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
        $rules=[
            'title'=>['required','max:255'],
            'description'=>['required','max:1000'],
            'price'=>['required','min:1'],
            'stock'=>['required','min:0'],
            'status'=>['required','in:available,unavailable']
        ];

        request()->validate($rules);

        if(request()->stock== 0 && request()->status == 'available'){
            // session()->put('error','If available must have stock');
            session()->flash('error','If available must have stock');
            return redirect('')->back()->withInput(request()->all());
        }
        // session()->forget('error');
        $product =Product::create(request()->all());
        session()->flash( 'success',"New product with { $product->id } was created" );

        return redirect()
        ->route('products.index')
        ->withSuccess( "New product with { $product->id } was created " );
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

        $rules=[
            'title'=>['required','max:255'],
            'description'=>['required','max:1000'],
            'price'=>['required','min:1'],
            'stock'=>['required','min:0'],
            'status'=>['required','in:available,unavailable']
        ];

        request()->validate($rules);

        $product=Product::findOrFail($product);
        $product->update(request()->all());
        // return redirect()->action([ProductController::class, 'index']);
        return redirect()
        ->route('products.index')
        ->withSuccess( "The product with { $product->id } was updated " );
        ;
    }

    public function destroy($product){
        $product = Product::findOrFail($product);
        $product ->delete();
        return redirect()
        ->route('products.index')
        ->withSuccess( "The product with { $product->id } was removed " );;
    }
}
