@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        
        <label for="description">Description:</label>
        <textarea name="description" required></textarea>

        <label for="price">Price:</label>
        <input type="number" name="price" required>

        <label for="image">Image URL:</label>
        <input type="text" name="image" required>

        <label for="category_id">Category:</label>
        <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <button type="submit">Create Product</button>
    </form>

    <a href="{{ route('products.index') }}">Back to Product List</a>
@endsection
