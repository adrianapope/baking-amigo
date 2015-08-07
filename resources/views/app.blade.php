<!doctytpe html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('customTitle', 'Baking Amigo')</title>
 	<link rel="stylesheet" href="{{ elixir('css/app.css') }}">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
	<link href='http://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
	<meta name="description" content="Recipes for bakers of all skill levels! Join today for free.">
 	@yield('customMeta')

 	</head>
<body>
	@include('layouts.nav')
        @include('partials.flash')
		@yield('content')

	<script src="//code.jquery.com/jquery.js"></script>
    <script>
    	$('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>

	<script src="{{ elixir('js/app.js') }}"></script>
	@include('layouts.footer')
</body>
</html>