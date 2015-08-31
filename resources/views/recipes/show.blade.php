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
				<img class="img-square" src="/img/mitten.png" alt="mitten" width="40" height="48" class="img-responsive img-rounded">
				<h5>BAKE</h5>
				<h5>15 MINS</h5>
			</div>
			<div class="col-sm-1">
				<img class="img-square" src="/img/clock.png" alt="cooking timer" width="40" height="48" class="img-responsive img-rounded">
				<h5>TOTAL</h5>
				<h5>15 MINS</h5>
			</div>
			<div class="col-sm-1">
				<img class="img-square" src="/img/cake.png" alt="cake" width="40" height="48" class="img-responsive img-rounded">
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
			<div class="col-sm-4 show-recipe-main-detailed-ingredients">
				<h3>INGREDIENTS</h3>
				<p>{{ $recipe->ingredients }}</p>
			</div>
			<div class="col-sm-6 show-recipe-main-detailed-instructions">
				<h3>INSTRUCTIONS</h3>
				<p>{{ $recipe->instructions }}</p>
			</div>
		</div>
	</div>
</div>

<div class="section show-recipe-tips">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3>TIPS</h3>
				<p>{{ $recipe->notes }}</p>
			</div>
		</div>

		<hr>

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
			<div class="row">
				<div class="col-sm-2">
					@if( Auth::user() && Auth::user()->id == $recipe->user_id)
						<a href="/recipes/{{ $recipe->id }}/edit"><span class="btn btn-success">Edit your Recipe</span></a>
					@endif
				</div>

				<div class="delete-record-wrapper">
					<div class="col-sm-2">
						@if( Auth::user() && Auth::user()->id == $recipe->user_id)
							{!! Form::open([
								'method' => 'DELETE',
								'route'  => ['recipes.destroy', $recipe->id] ]) !!}
								{!! Form::submit('Delete your Recipe', ['class' => 'btn btn-primary']) !!}
							{!! Form::close() !!}
						@endif
					</div>
				</div>
			</div>
		</div>

		<hr>


		{{-- <div class="rating">
    		<div class="btn btn-default btn-sm"><span class="glyphicon glyphicon-star-empty"></span></div>
		    <div class="btn btn-default btn-sm"><span class="glyphicon glyphicon-star-empty"></span></div>
		    <div class="btn btn-default btn-sm"><span class="glyphicon glyphicon-star-empty"></span></div>
		    <div class="btn btn-default btn-sm"><span class="glyphicon glyphicon-star-empty"></span></div>
		    <div class="btn btn-default btn-sm"><span class="glyphicon glyphicon-star-empty"></span></div>
		</div>
 --}}

		<div class="section show-recipe-reviews-and-comments-tabs">
			<div class="row">
				<div class="col-md-6">

					<!-- Nav Tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews ({{ count($reviews) }})</a></li>
							<li role="presentation"><a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">Comments ({{ count($comments) }})</a></li>
						</ul>

						<!-- Tab Panes -->
						<div class="tab-content">
							<!-- Tab Pane for Reviews starts here -->
							<div role="tabpanel" class="tab-pane fade in active" id="reviews">
								<div class="show-recipe-reviews-form">
									<!-- Display Review Content -->
									@if (count($reviews))
					 					@foreach ($reviews as $review)
					 						<div>
					 							{{ $review->rating }} Stars
					 						</div>
					 						<div>
					 							<p>{{ $review->comment->body }}</p>
											</div>
										@endforeach
									@else
										<h4>No reviews yet. Be the first!</h4>
									@endif
									<!-- Review Form-->
									<form action="/recipes/{{ $recipe->id }}/comments" method="get">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="star-rating">
											<select class="form-control" name="rating">
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
												<option value="4">Four</option>
												<option value="5">Five</option>
											</select>
										</div>
										<textarea name="body" class="form-control" placeholder="Add your review here"></textarea><br>
										<input type="submit" class="btn btn-primary" value="Submit Review">
									</form>
								</div>
							</div>
							<!-- Tab Pane for Comments starts here -->
							<div role="tabpanel" class="tab-pane fade" id="comments">
								<div class="show-recipe-comments-form col-md-6">
									<!-- Display Comment Content -->
									@if (count($comments))
										@foreach ($comments as $comment)
											<div>
												<p>{{ $comment->body }}<p>
											</div>
										@endforeach
									@else
										<h5>No comments yet. Be the first!</h5>
									@endif
									<!-- Comment Form -->
								    <form action="/recipes/{{ $recipe->id }}/comments" method="get">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<textarea name="body" class="form-control" placeholder="Join the discussion..."></textarea><br>
										<input type="submit" class="btn btn-primary" value="Submit Comment">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop