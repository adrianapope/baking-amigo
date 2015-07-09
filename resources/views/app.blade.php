<!doctytpe html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
{{--<link rel="stylesheet" href="/css/app.css"> --}}
	<link rel="stylesheet" href="{{ elixir('css/all.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
</head>

<body>
	@include('layouts.nav')
	<div class="container">
		{{-- #1 way of doing this. --}}
        @include('partials.flash')


 		{{--#2 notice it is :: and not just a single dot. use this with the laracasts/flash package
        @include('flash::message')--}}


		@yield('content')
	</div>

	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

   <script>

		/* #3 way of doing this. doing an overlay.
       $('flash-overlay-modal').modal();
		*/

       $('div.alert').not('.alert-important').delay(3000).slideUp(300);
   </script>

	@yield('footer')
</body>
</html>