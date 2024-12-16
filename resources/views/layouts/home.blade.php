<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')

    <!-- Css -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/logo-abbr.png')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/colors/switch.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/main.css')}}">

    @yield('style')
</head>

<body>
	
	@yield('body')
    

    <!-- Script -->
	<script src="{{asset('public/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('public/assets/js/main.js')}}"></script>
    <script src="{{asset('public/assets/js/switch.js')}}"></script>

    @yield('script')
       
</body>

</html>