@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <div id="content-container" style="text-align: center; padding: 20px; background-color: rgba(255, 255, 255, 0.9); border-radius: 10px;">
        <h1>Categories</h1>

        <div style="margin-bottom: 20px;">
            <a href="{{ route('categories.create') }}" style="padding: 10px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px;">Create Category</a>
        </div>

        @if($categories->count() > 0)
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                <thead>
                    <tr style="background-color: #007BFF; color: #fff;">
                        <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">ID</th>
                        <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Name</th>
                        <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr style="border-bottom: 1px solid #ddd;">
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $category->id }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $category->name }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">
                                <a href="{{ route('categories.show', $category->id) }}" style="color: #007BFF; text-decoration: none; margin-right: 10px;">View</a>
                                <a href="{{ route('categories.edit', $category->id) }}" style="color: #28a745; text-decoration: none; margin-right: 10px;">Edit</a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="color: #dc3545; background: none; border: none; cursor: pointer; text-decoration: underline;">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No categories available.</p>
        @endif
    </div>
@endsection
