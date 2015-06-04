<!doctytpe html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
	@include('layouts.nav')
	<div class="container">
		@yield('content')
	</div>

	@yield('footer')
</body>
</html>