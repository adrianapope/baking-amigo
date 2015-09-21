@extends('app')

@section('content')

	<div class="recipes-index-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Recipes</h1>
				</div>
			</div>

			@foreach(array_chunk($recipes->all(), 4) as $fourRecipes)
				<div class="row">
					@foreach($fourRecipes as $recipe)
						<div class="col-sm-3">
							<img src="/img/tiny-cookie.jpg" alt="Cookie" class="img-rounded img-responsive">
							<h2>
							<a href="/recipes/{{ $recipe->id }}">{{ ucwords($recipe->name) }}</a>
							</h2>

							<div class="body">{{ $recipe->description }}</div>
							</div>
					@endforeach
				</div>
				<hr>
			@endforeach

			<div class="row">
				<div class="col-sm-12">
					<a href="/recipes/create"><span class="btn btn-success btn-lg">Create a Recipe</span></a>
				</div>
			</div>
		</div>
	</div>

@stop

