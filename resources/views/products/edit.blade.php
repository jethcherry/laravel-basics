@extends('layouts.master')
@section('content')
    <h1>Edit Product</h1>
    <form method="POST" action="{{ route('products.update',['product'=>$product->id]) }}">
        @csrf
        @method('PATCH')
        <div class="form-row">
            <label>Title</label>
            <input class="form-control" type="text" value={{$product->title}} name="title" required>
        </div>

        <div class="form-row">
            <label>Description</label>
            <input class="form-control" type="text" value={{$product->description}} name="description" required>
        </div>

        <div class="form-row">
            <label>Price</label>
            <input class="form-control" type="number" value={{$product->price}}  name="price" min="1.00" step="0.01" required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="number" value={{$product->stock}} name="stock" min="0"  required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <select class="custom-select"  name="status"   required>
                <option value="" selected>Selected...</option>
                <option value="available" {{$product->status == 'available' ? 'selected' : '' }} >Available</option>
                <option value="unavailable" {{$product->status == 'unavailable' ? 'selected' : '' }} >Unavailable</option>
            </select>
        </div>
        <div class="form-row">
           <button class="btn btn-primary btn-lg" type="submit">Update  Product</button>
        </div>
    </form>
@endsection
