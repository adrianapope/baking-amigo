<!doctytpe html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 	<link rel="stylesheet" href="/css/app.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
	<link rel="stylesheet" href="{{ elixir('css/all.css') }}">
 	</head>
<body>
	@include('layouts.nav')
	<div class="container">
        @include('partials.flash')

		@yield('content')
	</div>

    <script>$('div.alert').not('.alert-important').delay(3000).slideUp(300);</script>--}}

	<script src="js/all.js"></script>

		@yield('footer')
</body>
</html>