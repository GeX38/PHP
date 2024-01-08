@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div id="content" style="min-height: 100%; display: flex; flex-direction: row; justify-content: center; align-items: center;">
        <img src="{{ asset('images/pepe.png') }}" alt="Pepe" style="width: 200px; height: auto;">
        <p>This is the home page content.</p>
    </div>
@endsection
