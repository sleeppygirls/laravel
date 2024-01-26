<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}} - @yield('judul')</title>
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("ass/main.css")}}">
</head>
<body>
    
    @include('template.navbar')
    
    @yield('content')

    @include('template.footer')

    <script src="{{asset("bootstrap/js/bootstrap.bundle.js")}}"></script>
</body>
</html>