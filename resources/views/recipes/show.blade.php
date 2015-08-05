@extends('app')

@section('customTitle', "$recipe->name - Baking Amigo")

@section('customMeta')
<meta property="og:title" content="{{ $recipe->name }}">
<meta property="og:url" content="http://www.bakingamigo.com/recipes/{{ $recipe->id }}">
@endsection

@section('content')
	<div class="container">
		<div class="show-index-header">
			<div class="row">
				<div class="col-sm-8">
					<div class="row">
						<div class="show-index-image col-sm-6">
							<img src="http://dummyimage.com/350x350/000/fff" alt= "placeholder image" class="img-rounded img-responsive">
						</div>
						<div class="show-index-description col-sm-6">
							<h1>{{ $recipe->name }} <small>{{ $recipe->created_at->diffForHumans() }}</small></h1>
							<h4>Description</h4>
							{{ $recipe->description }}
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="show-index-body">
								<h4>Instructions</h4>
								{{ $recipe->instructions }}

								<h4>Notes</h4>
								{{ $recipe->notes }}

								<h4>Published On:</h4>
								{{ $recipe->published_at }}

								<h4>Prep Time:</h4>
								{{ $recipe->prep_time}} {{ $recipe->prep_time_type }}

								<h4>Cook Time:</h4>
								{{ $recipe->cook_time }} {{ $recipe->cook_time_type }}

								<h4>Ready Time:</h4>
								{{ $recipe->ready_time }} {{ $recipe->ready_time_type }}

								<h4>Servings:</h4>
								{{ $recipe->servings }}

								@unless ($recipe->tags->isEmpty())
								<h4>Tags:</h4>
								<ul>
									@foreach ($recipe->tags as $tag)
										<li>{{ $tag->name }}</li>
									@endforeach
								</ul>
								@endunless
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="sidebar-item-wrapper">
						<h4>Latest Amigos</h4>
					</div>
					<div class="sidebar-item-wrapper">
						<h4>Recent Recipes</h4>
					</div>
					<div class="sidebar-item-wrapper">
						<h4>New Articles</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-navigation-wrapper">
		@if( Auth::user()->id == $recipe->user_id)
		<a href="/recipes/{{ $recipe->id }}/edit"><span class="btn btn-success">Edit your Recipe</span></a>
		@endif
	</div>

@stop

