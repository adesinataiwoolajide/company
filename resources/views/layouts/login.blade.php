<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<meta name="description" content=""/>
	<meta name="author" content=""/>
    <title>GLORIOUS EMPIRE TECHNOLOGIES</title>
    <link rel="icon" href="{{asset('administrator/img/rent.png')}}">
    <link rel="stylesheet" href="{{asset('administrator/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/Toast/css/Toast.min.css')}}">
</head>
<body class="dark-color-overlay bg-img" style="background-image: url({{asset('administrator/img/bg-img/8.jpg')}});">

    <main class="">
        @yield('content')
    </main>

    <script src="{{asset('administrator/js/jquery.min.js')}}"></script>
    <script src="{{asset('administrator/js/popper.min.js')}}"></script>
    <script src="{{asset('administrator/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('administrator/js/bundle.js')}}"></script>

    <!-- Active JS -->
    <script src="{{asset('administrator/js/default-asset/active.js')}}"></script>
    <script src="{{asset('administrator/Toast/js/Toast.min.js')}}"></script>
   @include('layouts.message')

</body>

</html>
