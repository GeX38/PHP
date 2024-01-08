@extends('layouts.app')

@section('title', 'Form')

@section('content')
    <h1>Form Page</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/form" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br>
        <label for="message">Message:</label>
        <textarea name="message" required>{{ old('message') }}</textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
@endsection
