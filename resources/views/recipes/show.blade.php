@extends('app')

@section('customTitle', "$recipe->name - Baking Amigo")

@section('customMeta')
<meta property="og:title" content="{{ $recipe->name }}">
<meta property="og:url" content="http://www.bakingamigo.com/recipes/{{ $recipe->id }}">
@endsection

@section('content')
	<div class="container">
		<div class="show-index">
			<h1>{{ $recipe->name }}</h1>

				<div class="show-index-wrapper">
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
				</div>
		</div>
	</div>
	<div class="page-navigation-wrapper">
		@if( Auth::user()->id == $recipe->user_id)
			<a href="/recipes/{{ $recipe->id }}/edit"><span class="btn btn-success">Edit your Recipe</span></a>
		@endif
	</div>
@stop