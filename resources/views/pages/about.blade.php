@extends('app')

@section('content')

<h1>About</h1>

@if (count($recipes))
	<h3>My favorite baking recipes include:</h3>
	<ul>
		@foreach ($recipes as $recipe)
		<li>{{ $recipe }}</li>
		@endforeach
	</ul>
@endif



<p>
	Hi. I built this recipe aggregator because I absolutely love baking and coding so I've merged my two passions together in one place. Thanks in advance for sharing your baking recipes!
	</p>
@stop