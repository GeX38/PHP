@extends('layouts.app')

@section('title', 'Data')

@section('content')
    <div id="content-container" style="text-align: center; padding: 20px; background-color: rgba(255, 255, 255, 0.9); border-radius: 10px;">
        <h1>Data Page</h1>

        @if(count($formData) > 0)
            <table style="width: 100%; margin-top: 20px;">
                <thead>
                    <tr style="background-color: #007BFF; color: #fff; border: 1px solid #ddd; padding: 8px;">
                        <th style="padding: 10px; border: 1px solid #ddd;">Name</th>
                        <th style="padding: 10px; border: 1px solid #ddd;">Email</th>
                        <th style="padding: 10px; border: 1px solid #ddd;">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($formData as $data)
                        <tr style="border: 1px solid #ddd;">
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $data['name'] }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $data['email'] }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $data['message'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No form data available.</p>
        @endif
    </div>
@endsection
