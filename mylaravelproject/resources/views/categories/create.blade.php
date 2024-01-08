@extends('layouts.app')

@section('title', 'Create Category')

@section('content')
    <h1>Create Category</h1>

    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <button type="submit">Create Category</button>
    </form>

    <a href="{{ route('categories.index') }}">Back to Category List</a>
@endsection
