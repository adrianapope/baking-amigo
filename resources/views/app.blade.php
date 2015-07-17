<!doctytpe html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('customTitle', 'Baking Amigo')</title>
 	<link rel="stylesheet" href="{{ elixir('css/app.css') }}">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">

 	<meta name="description" content="Recipes for bakers of all skill levels! Join today for free.">
 	@yield('customMeta')

 	</head>
<body>
	@include('layouts.nav')
	<div class="container">
        @include('partials.flash')
		@yield('content')
	</div>

    <script>$('div.alert').not('.alert-important').delay(3000).slideUp(300);</script>

	<script src="js/all.js"></script>

	@yield('footer')
</body>
</html>