<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		{{-- <link rel="stylesheet" href="./resources/sass/reset.css" />
		<link rel="stylesheet" href="./resources/sass/app.css" /> --}}
		
		@vite(['resources/sass/reset.sass', 'resources/sass/app.sass', 'resources/js/app.js'])
		<title>@yield('title-block')</title>
	</head>
	<body>
		@include('include.mainheader')
        @yield('content')
    	@include('include.footer')
    </body>
</html>