@extends('layouts.app')

@section('title', 'Category Details')

@section('content')
    <h1>{{ $category->name }}</h1>
    <p>Created at: {{ $category->created_at }}</p>
    <p>Updated at: {{ $category->updated_at }}</p>

    <a href="{{ route('categories.index') }}">Back to Categories</a>
@endsection
