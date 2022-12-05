<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/app.scss') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Request Manager</title>
</head>
<body>
    
    @include('inc.nav')
    @include('inc.messages')
    <div class="m-4"></div>
    <div class="container">
        @yield('content')
    </div>
    <div class="m-4"></div>

</body>
</html>