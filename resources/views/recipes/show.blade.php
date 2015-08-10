@extends('app')

@section('customTitle', "$recipe->name - Baking Amigo")

@section('customMeta')
<meta property="og:title" content="{{ $recipe->name }}">
<meta property="og:url" content="http://www.bakingamigo.com/recipes/{{ $recipe->id }}">
@endsection

@section('content')

<div class="section show-recipe-header-section">
	<div class="container">

		<div class="row">
			<div class="col-sm-4 ">
				<img src="/img/test.jpg" class="img-responsive img-rounded">
			</div> {{-- big column 3 in section ends here--}}
			<div class="col-sm-8">
				<div class="row show-recipe-single">
					<div class="col-sm-12">
						<h1>{{ $recipe->name }}</h1>
					</div>
				</div>

				<hr>

				<div class="row">
					<div class="col-sm-6 show-recipe-username-preview">
						<strong>BY <a href="#">USERNAMEGOESHERE</a></strong>
					</div>
					<div class="col-sm-6 show-recipe-review-preview">
						<strong><a href="#">READ REVIEWS</a></strong>
						<span class="show-recipe-rating">
      					<span class="star">★</span>
      					<span class="star">★</span>
      					<span class="star">★</span>
      					<span class="star">★</span>
      					<span class="star">★</span>
   						</span>
					</div>
				</div> {{-- column 9 row ends here --}}

				<hr>

				<div class="row">
					<div class="col-sm-12 lead">
						<p><i class="fa fa-quote-left"></i> {{ $recipe->description }} <i class="fa fa-quote-right"></i></p>
					</div>
						<div class="col-sm-12 media-left">
							<ul class="show-recipe-social-links">
								<li><a href="https://www.facebook.com/"><i class="fa fa-facebook-square"></i></a></li>
								<li><a href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://plus.google.com/"><i class="fa fa-google-plus-square"></i></a></li>
								<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
								<li><a href="http://tumblr.com/"><i class="fa fa-tumblr-square"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
								<li><a href="#"><i class="fa fa-print"></i></a><li>
							</ul>
						</div>
				</div>
			</div>{{-- big column 9 in section ends here --}}
		</div> {{--end first row in section--}}


	</div>
</div>

<div class="section show-recipe-main-wrapper">
	<div class="container">

		<div class="row show-recipe-main-key-info">
			<div class="col-sm-1">
				<img class="img-square" src="/img/mixer.png" alt="mixer" width="40" height="48" class="img-responsive img-rounded">
				<h5>PREP</h5>
				<h5>15 MINS</h5>
			</div>
			<div class="col-sm-1">
				<img class="img-square" src="/img/hat.png" alt="chef hat" width="40" height="48" class="img-responsive img-rounded">
				<h5>BAKE</h5>
				<h5>15 MINS</h5>
			</div>
			<div class="col-sm-1">
				<img class="img-square" src="/img/clock.png" alt="cooking timer" width="40" height="48" class="img-responsive img-rounded">
				<h5>TOTAL</h5>
				<h5>15 MINS</h5>
			</div>
			<div class="col-sm-1">
				<img class="img-square" src="/img/newpie.png" alt="slice of pie" width="40" height="48" class="img-responsive img-rounded">
				<h5>SERVES</h5>
				<h5>12</h5>
			</div>
			<div class="col-sm-8 media-right">
				<a href="#"><i class="fa fa-heart-o fa-4x fa-pull-right"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="section show-recipe-wrapper-main-detailed-info">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 show-recipe-main-detailed-ingredients">
				<h3>INGREDIENTS</h3>
				<p>ingredients go here</p>
			</div>
			<div class="col-sm-6 show-recipe-main-detailed-instructions">
				<h3>INSTRUCTIONS</h3>
				<p>{{ $recipe->instructions }}</p>

				<hr>

				<h3>TIPS</h3>
				<p>{{ $recipe->notes }}</p>
			</div>
		</div>
	</div>
</div>

<div class="section show-recipes-review wrapper">
	<div class="container">
		<div class="row show-recipe-review-single">
			<div class="col-sm-6">
				<h3>REVIEWS</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic cum perferendis non in nobis incidunt voluptas necessitatibus corrupti laboriosam adipisci vel esse unde facere odio dolore expedita, aliquid quaerat eveniet?
				</p>
			</div>
		</div>

		<div class="explore-tag-options">
			<h3>TYPE</h3>
			@unless ($recipe->tags->isEmpty())
				<ul>
					@foreach ($recipe->tags as $tag)
						<li><a href="#">{{ $tag->name }}</a></li>
					@endforeach
				</ul>
			@endunless
		</div>

		<div class="page-navigation-wrapper">
			@if( Auth::user()->id == $recipe->user_id)
			<a href="/recipes/{{ $recipe->id }}/edit"><span class="btn btn-success">Edit your Recipe</span></a>
			@endif
		</div>

	</div>
</div>

@stop

