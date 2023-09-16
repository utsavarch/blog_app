<!doctype html>
<html lang="en">
<head>
    <style>
        body, html {
            margin-left:1%;
            margin-right:1%;
            margin-bottom:1%;
            margin-top:1%;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Auth Laravel')</title>
    @include('include.header')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@auth
    <h6>{{auth()->user()->name}}</h6>
@endauth
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
