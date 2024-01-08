@extends('layouts.app')

@section('title', 'Category List')

@section('content')
    <h1>Category List</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category) }}">View</a>
                        <a href="{{ route('categories.edit', $category) }}">Edit</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('categories.create') }}">Create Category</a>
@endsection
