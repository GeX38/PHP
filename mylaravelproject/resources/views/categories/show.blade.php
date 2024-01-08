@extends('layouts.app')

@section('title', 'Category Details')

@section('content')
    <div id="content-container" style="text-align: center; padding: 20px; background-color: rgba(255, 255, 255, 0.9); border-radius: 10px;">
        <h1>Category Details</h1>

        <div style="margin-bottom: 20px;">
            <a href="{{ route('categories.index') }}" style="padding: 10px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px;">Back to Categories</a>
        </div>

        <table style="width: 50%; margin: 0 auto; text-align: left; border: 1px solid #ddd; border-collapse: collapse;">
            <tr style="background-color: #007BFF; color: #fff;">
                <th style="padding: 10px; border: 1px solid #ddd;">ID</th>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $category->id }}</td>
            </tr>
            <tr>
                <th style="padding: 10px; border: 1px solid #ddd;">Name</th>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $category->name }}</td>
            </tr>
        </table>
    </div>
@endsection
