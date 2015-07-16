@extends('app')

@section('content')

<h1>About</h1>

@if (count($recipes))
	<h3>My favorite baking recipes include:</h3>
	<ul>
		@foreach ($recipes as $recipe)
		<li><a href="/recipes/{{ $recipe->id }}">{{ $recipe->title }}</a></li>
		@endforeach
	</ul>
@endif



<p>
	Hi, and thank you for visiting Baking Amigo! When I'm not busy writing code, I really enjoy baking no matter what time of year it is. I built this recipe aggregator as a way to merge my two passions together into one convenient place. I hope that you'll decide to share your awesome baking recipes with our little community. -Adriana Pope
	</p>
@stop