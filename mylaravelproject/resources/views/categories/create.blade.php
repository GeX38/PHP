@extends('layouts.app')

@section('title', 'Create Category')

@section('content')
    <div id="content-container" style="text-align: center; padding: 20px; background-color: rgba(255, 255, 255, 0.9); border-radius: 10px;">
        <h1>Create Category</h1>

        <div style="margin-bottom: 20px;">
            <a href="{{ route('categories.index') }}" style="padding: 10px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px;">Back to Categories</a>
        </div>

        <form action="{{ route('categories.store') }}" method="POST" style="max-width: 400px; margin: 0 auto;">
            @csrf
            <div style="margin-bottom: 10px;">
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ old('name') }}" required style="width: 100%;">
            </div>
            <div>
                <button type="submit" style="padding: 10px; background-color: #28a745; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Create Category</button>
            </div>
        </form>
    </div>
@endsection
