
@extends('layouts.master')
@section('coontent')
    <h1>{{ $product->title ?? 'No Title Available' }} ({{ $product->id ?? 'N/A' }})</h1>
    {{-- {!!$subtitle!!}--}}
    <p>{{ $product->description ?? 'No Description Available' }}</p>
    <p>{{ $product->price ?? 'No price Available' }}</p>
    <p>{{ $product->stock ?? 'No Description Available' }}</p>
    <p>{{ $product->status ?? 'No Description Available' }}</p>

@endsection

