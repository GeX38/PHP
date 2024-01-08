@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
    <h1>Edit Category</h1>

    <form action="{{ route('categories.update', $category) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $category->name }}" required>
        <button type="submit">Update Category</button>
    </form>

    <a href="{{ route('categories.index') }}">Back to Category List</a>
@endsection
