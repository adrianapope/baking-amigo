@extends('app')

@section('customTitle', "$recipe->name - Baking Amigo")

@section('customMeta')
<meta property="og:title" content="{{ $recipe->name }}">
<meta property="og:url" content="http://www.bakingamigo.com/recipes/{{ $recipe->id }}">
@endsection

@section('content')


<div class="container">
	<div class="row">
		<div class="col-sm-12 show-index-wrapper">
			<h1>{{ $recipe->name }}</h1>
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<img src="/img/chocolate-chip-cookies.jpg" class="img-responsive img-rounded">
				</div>
				<div class="row">
					<div class="col-sm-4 col-xs-12 bg-success">
						<small>Published On:
							{{ $recipe->published_at }}
						</small>
						<hr>
						<blockquote>
						<p>{{ $recipe->description }}<p>
						</blockquote>
						<div class="col-sm-2 col-xs-12">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-6 show-index-key-info bg-info">
			<ul>
				<li><p>Prep Time:</p>
						{{ $recipe->prep_time}} {{ $recipe->prep_time_type }}
				</li>
				<li><p>Cook Time:</p>
					{{ $recipe->cook_time }} {{ $recipe->cook_time_type }}
				</li>
				<li><p>Ready Time:</p>
						{{ $recipe->ready_time }} {{ $recipe->ready_time_type }}
				</li>
				<li><p>Servings:</p>
						{{ $recipe->servings }}
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-6 col-xs-12 bg-warning">
					<h3>Ingredients</h3>
					<p>ingredients go here later dynamically.</p>
				</div>
				<div class="row">
					<div class="col-sm-4 col-xs-12 bg-success">
						<h3>Instructions</h3>
						{{ $recipe->instructions }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-6 col-xs-12 bg-danger">
					<h3>Helpful Notes</h3>
					{{ $recipe->notes }}
				</div>
				<div class="row show-index-tags">
					<div class="col-sm-4 col-xs-12 bg-info">
						@unless ($recipe->tags->isEmpty())
							<h3>Tags</h3>
							<ul>
								@foreach ($recipe->tags as $tag)
									<li><button type="button" class="btn btn-primary btn-xs ">{{ $tag->name }}</button>
									</li>
								@endforeach
							</ul>
						@endunless
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




							{{--

							<h1>{{ $recipe->name }}</h1>

							<h4>Description</h4>
							{{ $recipe->description }}


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


	<div class="page-navigation-wrapper">
		@if( Auth::user()->id == $recipe->user_id)
		<a href="/recipes/{{ $recipe->id }}/edit"><span class="btn btn-success">Edit your Recipe</span></a>
		@endif
	</div>
 --}}
@stop

