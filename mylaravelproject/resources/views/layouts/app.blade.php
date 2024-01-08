<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <style>
        body {
            background-image: url('{{ asset('images/main.png') }}');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            font-family: 'Helvetica';
        }

        #header, #content, #footer {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #header {
            text-align: center;
        }

        #header a {
            margin-right: 20px;
            text-decoration: none;
            color: #333;
        }

        #content {
            text-align: center;
        }

        #footer {
            text-align: center;
        }

        #footer a {
            margin-left: 20px;
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>

    <div id="header">
        @include('layouts.header')
    </div>

    <div id="content">
        @yield('content')
    </div>

    <div id="footer">
        @include('layouts.footer')
    </div>

</body>
</html>
