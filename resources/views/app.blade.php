<!doctytpe html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('customTitle', 'Baking Amigo')</title>
 	<link rel="stylesheet" href="{{ elixir('css/app.css') }}">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
	<link href='http://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<meta name="description" content="Recipes for bakers of all skill levels! Join today for free.">
 	@yield('customMeta')

</head>
<body>
	@include('errors.errors')
	@include('layouts.nav')
	@yield('content')

	<script src="//code.jquery.com/jquery.js"></script>

    <script>
/*    	$('div.alert').not('.alert-permanent').delay(3000).slideUp(300);
*/  </script>

	<script src="{{ elixir('js/app.js') }}"></script>

	<script>
		$('#myTabs a').click(function (e) {
	  		e.preventDefault()
	  		$(this).tab('show')
		});
	</script>

	@include('layouts.footer')

	@include('partials.flash')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js">
	</script>
	<script>
		Dropzone.options.addPhotosForm = {
			paramName: 'photo', // it was defaulted to 'file'
			maxFilesize: 10,
			acceptedFiles: 'jpg, .jpeg, .png, .bmp'
		};
	</script>
</body>
</html>