@extends('app')

@section('content')
	<!-- Jumbotron -->
	<div class="text-center">
		<div class="jumbotron">
			<h1>Allergen-free Recipes</h1>
			<p class="homepage-jumbotron-paragraph"> Best allergen-free baking recipes in one place.</p>

 			<div class="search-bar-wrapper">
	 			<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
					    <div class="input-group">
					      <input type="text" class="form-control input-lg" placeholder="What would you like to bake?">
					      <span class="input-group-btn">
					        <button class="btn btn-primary btn-lg" type="button">Search</button>
					      </span>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <!-- THREE CIRCLES MARKETING -->

    <div class="homepage-points-wrapper">
    	<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<a href="auth/register"><img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140"></a>
					<a href="auth/register"><h2 class="homepage-heading">Join</h2></a>
					<p class="text-muted">Want to bake something amazing that <br>
					impresses heaps of folks? Sign up today. </p>
				</div><!-- /col-lg-4 -->
				<div class="col-lg-4">
					<a href="recipes"><img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140"></a>
					<a href="recipes"><h2 class="homepage-heading">Discover</h2></a>
					<p class="text-muted">Learn tips and tricks from fellow <br>
					bakers. Your next challenge awaits you. </p>
				</div><!-- /col-lg-4 -->
				<div class="col-lg-4">
					<a href="recipes/create"><img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140"></a>
					<a href="recipes/create"><h2 class="homepage-heading">Share</h2></a>
					<p class="text-muted">Write a recipe, then use a recipe. <br>
					It's the cycle that keeps on giving. </p>
				</div><!-- /col-lg-4 -->
			</div><!-- /.row -->
		</div>
	</div>


      <!-- START RECIPES -->

	<div class="homepage-recipes-wrapper">
		<div class="container">
	      <div class="row">
	        <div class="col-sm-3">
				{{-- $img = Image::make('img/cookies-flower-lemon.jpg')->resize(250, 250);
				 return $img->response('jpg');
				}); --}}
				<img src="img/cookies-flower-lemon.jpg" alt="Generic Placeholder image" class="img-rounded img-responsive">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded img-responsive">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded img-responsive">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded img-responsive">
				</div>
			</div>
		</div>
	</div>
		<div class="homepage-recipes-wrapper">
		<div class="container">
	      <div class="row">
	        <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded img-responsive">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded img-responsive">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded img-responsive">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded img-responsive">
				</div>
			</div>
		</div>
	</div>
		<div class="homepage-recipes-wrapper">
		<div class="container">
	      <div class="row">
	        <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded img-responsive">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded img-responsive">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded img-responsive">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded img-responsive">
				</div>
			</div>
		</div>
	</div>


@endsection
