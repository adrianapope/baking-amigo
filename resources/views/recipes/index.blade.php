@extends('app')

@section('content')
	<div class="container">
		<div class="recipes-index">
			<h1>Recipes</h1>

			@foreach ($recipes as $recipe)
				<div class="recipes-index-single">
					<h2>
						<a href="/recipes/{{ $recipe->id }}">{{ ucwords($recipe->name) }}</a>
					</h2>

					<div class="body">{{ $recipe->description }}</div>
				</div>
			@endforeach
		</div>
		<div class="page-navigation-wrapper">
			<a href="/recipes/create"><span class="btn btn-success btn-lg">Create a Recipe</span></a>
		</div>
	</div>
@stop
