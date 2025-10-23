<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		{{-- <link rel="stylesheet" href="./resources/sass/reset.css" />
		<link rel="stylesheet" href="./resources/sass/app.css" /> --}}
	
		<link rel="stylesheet" href="{{ asset('build/assets/reset-CMMCmBt6.css') }}">
		<link rel="stylesheet" href="{{ asset('build/assets/app-ugCQpvuP.css') }}">
        <script src="{{ asset('build/assets/app-C9LWlAh9.js') }}" defer></script>


		
		<title>@yield('title-block')</title>
	</head>
	<body>
		@include('include.header')
        @yield('content')
    	@include('include.footer')
    </body>
</html>