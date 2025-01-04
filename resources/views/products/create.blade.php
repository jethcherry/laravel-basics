@extends('layouts.master')
@section('content')
    <h1>Create Product</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="form-row">
            <label>Title</label>
            <input class="form-control" type="text" name="title" required>
        </div>

        <div class="form-row">
            <label>Description</label>
            <input class="form-control" type="text" name="description" required>
        </div>

        <div class="form-row">
            <label>Price</label>
            <input class="form-control" type="number" name="price" min="1.00" step="0.01" required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="number" name="stock" min="0"  required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <select class="custom-select" name="status"   required>
                <option value="" selected>Selected...</option>
                <option value="available" >Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
        </div>
        <div class="form-row">
           <button class="btn btn-primary btn-lg" type="submit">Create  Product</button>
        </div>
    </form>
@endsection
