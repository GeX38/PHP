@extends('layouts.app')

@section('title', 'Data')

@section('content')
    <h1>Data Page</h1>

    @if(count($formData) > 0)
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach($formData as $data)
                    <tr>
                        <td>{{ $data['name'] }}</td>
                        <td>{{ $data['email'] }}</td>
                        <td>{{ $data['message'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No form data available.</p>
    @endif
@endsection
