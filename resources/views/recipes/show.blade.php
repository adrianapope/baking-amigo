 @extends('app')

@section('content')

<h1>{{ $recipe->name }}</h1>

	<article>
		<h2>Description</h2>
		{{ $recipe->description }}

		<h2>Instructions</h2>
		{{ $recipe->instructions }}

		<h2>Notes</h2>
		{{ $recipe->notes }}

		<h2>Published On:</h2>
		{{ $recipe->published_at }}

		<h2>Prep Time:</h2>
		{{ $recipe->prep_time}} {{ $recipe->prep_time_type }}

		<h2>Cook Time:</h2>
		{{ $recipe->cook_time }} {{ $recipe->cook_time_type }}

		<h2>Ready Time:</h2>
		{{ $recipe->ready_time }} {{ $recipe->ready_time_type }}

		<h2>Servings:</h2>
		{{ $recipe->servings }}

		@unless ($recipe->tags->isEmpty())
		<h5>Tags:</h5>
		<ul>
			@foreach ($recipe->tags as $tag)
				<li>{{ $tag->name }}</li>
			@endforeach
		</ul>
		@endunless
	</article>

@stop