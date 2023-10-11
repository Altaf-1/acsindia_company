<!DOCTYPE html>
<html>
	<head>
		<title>Login -Academy of Civil Services</title> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!--<link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">-->
		<link rel="shortcut icon" href="{{asset('comimages/gbar.webp')}}" type="image/x-icon">
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/sweetalert2.min.js')}}"></script>
        @yield('scripts')
		<!--Fontawesome CDN-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
		<link rel="shortcut icon" href="comimages/gbar.jpg" type="image/x-icon">
		<!--Custom styles-->
		<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
		<style>
		body{
		background-image: url({{asset('comimages/corbg.webp')}});
		background-size: cover;
		background-repeat: no-repeat;
		height: 100%;
		font-family: 'Numans', sans-serif;
		}
		</style>
	</head>
	@yield('content')

</html>
