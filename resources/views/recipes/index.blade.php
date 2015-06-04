@extends('app')

@section('content')

<h1>Recipes</h1>	
	@foreach ($recipes as $recipe)
		<article>
			<h2>
				{{ $recipe->title }}
				{{-- hardcode it. referencing the URI --}}
				<a href="/recipes/{{ $recipe->id }}">{{ $recipe->title }}</a> 

				{{--  or another ways is to think in terms of the controller method you want to involve. i want to link
				to whatever the correct URI is so I can trigger the @show method. then you can use the helper function action 
				First we give it the name, and then next if there are any paraameters to pass through you can do that as an array.

				<a href="{{ action('RecipeController@show', [$recipe->id] }}"> {{ $recipe->title }}</a> --}}

				{{-- third way to do this is to reference a URL function. so we say url to recipes and then we can pass
				in any additional segments like the recipe's id. 
					<a href="{{ url('/recipes', $recipe->id) }}">{{ $recipe->title }}</a>--}}
			</h2>

				<div class="body">{{ $recipe->description }}</div>
		</article>

	@endforeach

@stop
