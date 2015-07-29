

@extends('app')

@section('content')

<div class="index-wrapper">
	<div class="container">
		<h1>Recipes</h1>

		@foreach ($recipes as $recipe)
			<article>
				<h2>
					<a href="/recipes/{{ $recipe->id }}">{{ $recipe->name }}</a>
				</h2>

				<div class="body">{{ $recipe->description }}</div>
			</article>
		@endforeach

		<a href="/recipes/create"><span class="btn btn-default btn-lg">Create a Recipe</span></a>
	</div>
</div>
@stop
