@extends('app')

@section('content')
     <!-- Jumbotron -->
      <div class="text-center">
        <div class="jumbotron">
          <h1>Find & Swap Recipes.</h1>
          <p class="lead">!Hola! Welcome to our little community of fellow baking enthusiasts where everyone is an amigo. Whether you are just a newb trying out your mitts, or an experienced macaroon expert, we'd love to share your recipes with the rest of the world. Híjole, what are you waiting for?</p>
          <p><a class="btn btn-lg btn-success" href="/recipes/create" role="button">Submit a Recipe Today</a>
          </p>
      </div>
      </div>


    <!-- THREE CIRCLES MARKETING -->

    <div class="homepage-points-wrapper">
    	<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
					<h2>Become an Amigo!</h2>
					<p>Want to bake something amazing that impresses heaps of folks? Join today for free.</p>
				</div><!-- /col-lg-4 -->
				<div class="col-lg-4">
					<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
					<h2>Ándale, Level Up</h2>
					<p>Learn tips and tricks from fellow bakers. Your next challenge awaits you.  </p>
				</div><!-- /col-lg-4 -->
				<div class="col-lg-4">
					<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
					<h2>¡Órale! Sharing is Caring</h2>
					<p>Write a recipe, then use a recipe. It's the recipe cycle that keeps on giving.</p>
				</div><!-- /col-lg-4 -->
			</div><!-- /.row -->
		</div>
	</div>


      <!-- START RECIPES -->


{{--     <div class="homepage-recipes-wrapper">
    	<div class="container">
	      <div class="row">
	        <div class="col-sm-3">
	          <img class="img-square img-responsive" src="http://dummyimage.com/300x300/e693e6/1c29db.jpg" alt="Generic placeholder image" width="300" height="300">
	        </div>
	        <div class="col-sm-3">
	          <img class="img-square img-responsive" src="http://dummyimage.com/300x300/e693e6/1c29db.jpg" alt="Generic placeholder image" width="300" height="300">
	        </div>
	        <div class="col-sm-3">
	          <img class="img-square img-responsive" src="http://dummyimage.com/300x300/e693e6/1c29db.jpg" alt="Generic placeholder image" width="300" height="300">
	        </div>
	        <div class="col-sm-3">
	          <img class="img-square img-responsive" src="http://dummyimage.com/300x300/e693e6/1c29db.jpg" alt="Generic placeholder image" width="300" height="300">
	        </div>
	      </div>
	    </div>
	</div>
 --}}
	<div class="homepage-recipes-wrapper-first">
		<div class="container">
	      <div class="row">
	        <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded">
				</div>
			</div>
		</div>
	</div>
		<div class="homepage-recipes-wrapper-second">
		<div class="container">
	      <div class="row">
	        <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded">
				</div>
			</div>
		</div>
	</div>
		<div class="homepage-recipes-wrapper-third">
		<div class="container">
	      <div class="row">
	        <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded">
			</div>
			  <div class="col-sm-3">
				<img src="http://dummyimage.com/250x250/b3b1b3/dcdef5.jpg" alt="Generic Placeholder image" class="img-rounded">
				</div>
			</div>
		</div>
	</div>


@endsection
