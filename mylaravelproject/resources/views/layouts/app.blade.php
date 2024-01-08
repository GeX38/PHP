<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
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
