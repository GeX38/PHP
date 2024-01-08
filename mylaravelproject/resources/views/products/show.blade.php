@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
    <h1>Product Details</h1>

    <p>Name: {{ $product->name }}</p>
    <p>Price: {{ $product->price }}</p>

    <a href="{{ route('products.index') }}">Back to Product List</a>
@endsection
