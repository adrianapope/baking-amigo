@extends('app')

@section('content')
	<!-- Jumbotron -->
	<div class="text-center">
		<div class="jumbotron">
			<h1>Find &amp; Swap <span class="weak">Allergen-free</span> Recipes.</h1>
			<p class="text-info">!Hola! Welcome to our little community of allergen-free baking enthusiasts where everyone is an amigo. Whether you are just a newb trying out your mitts or an experienced ingredient-substituting expert, we'd love to share your recipe with the rest of the world.</p>
			<p>
				<a class="btn btn-success btn-lg" href="/recipes/create" role="button">Submit a Recipe Today</a>
			</p>
		</div>
	</div>


    <!-- THREE CIRCLES MARKETING -->

    <div class="homepage-points-wrapper">
    	<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
					<h2 class="homepage-heading">Become an Amigo!</h2>
					<p class="text-muted">Want to bake something amazing that impresses heaps of folks? Join today for free.</p>
				</div><!-- /col-lg-4 -->
				<div class="col-lg-4">
					<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
					<h2 class="homepage-heading">Ándale, Level Up</h2>
					<p class="text-muted">Learn tips and tricks from fellow bakers. Your next challenge awaits you.  </p>
				</div><!-- /col-lg-4 -->
				<div class="col-lg-4">
					<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
					<h2 class="homepage-heading">¡Órale! Sharing is Caring</h2>
					<p class="text-muted">Write a recipe, then use a recipe. It's the recipe cycle that keeps on giving.</p>
				</div><!-- /col-lg-4 -->
			</div><!-- /.row -->
		</div>
	</div>


      <!-- START RECIPES -->

	<div class="homepage-recipes-wrapper">
		<div class="container">
	      <div class="row">
	        <div class="col-sm-3">
				{{-- $img = Image::make(Input::file('img/cookies-flower-lemon.jpg'))
				$img->resize(250, 250);
				return Response::make($image, 200, ['Content-Type' => 'image/jpg']);
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
