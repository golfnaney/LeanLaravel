<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap4.1.3/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{URL::asset('js/bootstrap4.1.3/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/bootstrap4.1.3/bootstrap.min.js')}}"></script> 
    <style>
    body{background-color: ghostwhite;}
    </style>
    
</head>
<body>
    <h1></h1>
    @yield('content')
</body>
<footer>@yield('footer')</footer>
</html>