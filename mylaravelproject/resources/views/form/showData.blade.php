@extends('layouts.app')

@section('title', 'Data')

@section('content')
    <h1>Data Page</h1>

    @if(count($formData) > 0)
        <table style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th style="border: 1px solid #ddd; padding: 8px;">Name</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Email</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach($formData as $data)
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $data['name'] }}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $data['email'] }}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{ $data['message'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No form data available.</p>
    @endif
@endsection
