@extends('layouts.app')

@section('title', 'Form')

@section('content')
    <div id="content" style="background-image: url('{{ asset('images/background.png') }}'); background-size: cover; min-height: 100%; width: fit-content; margin: 0 auto;">
        <div id="form-container" style="text-align: center; padding: 20px; background-color: rgba(255, 255, 255, 0.9); border-radius: 10px;">
            <h1>Form Page</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/form" method="post" style="margin: 0 auto; width: fit-content;">
                @csrf
                <div style="margin-bottom: 10px; text-align: left;">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{ old('name') }}" required style="width: 100%;">
                </div>
                <div style="margin-bottom: 10px; text-align: left;">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="{{ old('email') }}" required style="width: 100%;">
                </div>
                <div style="margin-bottom: 10px; text-align: left;">
                    <label for="message">Message:</label>
                    <textarea name="message" required style="width: 100%;">{{ old('message') }}</textarea>
                </div>
                <div style="text-align: center;">
                    <button type="submit" style="padding: 10px; background-color: #007BFF; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
