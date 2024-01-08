@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <div id="content-container" style="text-align: center; padding: 20px; background-color: rgba(255, 255, 255, 0.9); border-radius: 10px;">
        <h1>Edit Product</h1>

        <div style="margin-bottom: 20px;">
            <a href="{{ route('products.index') }}" style="padding: 10px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px;">Back to Products</a>
        </div>

        <form action="{{ route('products.update', $product->id) }}" method="POST" style="max-width: 400px; margin: 0 auto;">
            @csrf
            @method('PUT')
            <div style="margin-bottom: 10px;">
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ $product->name }}" required style="width: 100%;">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="price">Price:</label>
                <input type="number" name="price" value="{{ $product->price }}" required style="width: 100%;">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="category_id">Category:</label>
                <select name="category_id" required style="width: 100%;">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" style="padding: 10px; background-color: #007BFF; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Update Product</button>
            </div>
        </form>
    </div>
@endsection
