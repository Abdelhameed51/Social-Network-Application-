<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social App @yield('title')</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ url('/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
</head>
<body>


@section('sidebar')
@show

<div class="container">
    @yield('content')
</div>
<!-- JS -->
<script src="{{ url('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('/js/main.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
