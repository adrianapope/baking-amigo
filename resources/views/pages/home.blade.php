@extends('app')

@section('content')
	<!-- Jumbotron -->
	<div class="text-center">
		<div class="jumbotron">
			<h1>Allergen-free Recipes</h1>
			<p class="homepage-jumbotron-paragraph"> Best allergen-free baking recipes in one place.</p>

 			<div class="search-bar-wrapper">
	 			<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
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
				<div class="col-sm-4">
					<a href="auth/register"><img class="img-circle" src="img/tiny-chip.png" alt="Chocolate Chip Cookie" width="140" height="140"></a>
					<a href="auth/register"><h2 class="homepage-heading">Join</h2></a>
					<p class="text-muted">Want to bake something amazing that <br>
					impresses heaps of folks? Sign up today. </p>
				</div><!-- /col-lg-4 -->
				<div class="col-sm-4">
					<a href="recipes"><img class="img-circle" src="img/tiny-chip.png" alt="Chocolate Chip Cookie" width="140" height="140"></a>
					<a href="recipes"><h2 class="homepage-heading">Discover</h2></a>
					<p class="text-muted">Learn tips and tricks from fellow <br>
					bakers. Your next challenge awaits you. </p>
				</div><!-- /col-lg-4 -->
				<div class="col-sm-4">
					<a href="recipes/create"><img class="img-circle" src="img/tiny-chip.png" alt="Chocolate Chip Cookie" width="140" height="140"></a>
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
	      	<h2>Explore Recipes by Category</h2>
				<div class="row">
	        		<div class="col-xs-6 col-sm-3">
						<img src="img/tiny-cookie.jpg" alt="Cookie" class="img-rounded img-responsive">
						<h3>Cookies</h3>
					</div>
					<div class="col-xs-6 col-sm-3">
						<img src="img/tiny-bread.jpg" alt="Bread" class="img-rounded img-responsive">
						<h3>Breads</h3>
					</div>
			  		<div class="col-xs-6 col-sm-3">
						<img src="img/tiny-cupcakes.jpg" alt="Cupcakes" class="img-rounded img-responsive">
						<h3>Cupcakes</h3>
					</div>
				    <div class="col-xs-6 col-sm-3">
						<img src="img/tiny-handpies.jpg" alt="Handpies" class="img-rounded img-responsive">
						<h3>Pies</h3>
					</div>
					</div>
		</div>
	</div>
		<div class="homepage-recipes-wrapper">
		<div class="container">
	      <div class="row">
	        <div class="col-xs-6 col-sm-3">
				<img src="img/tiny-donuts.jpg" alt="Donuts" class="img-rounded img-responsive">
				<h3>Donuts</h3>
			</div>
			  <div class="col-xs-6 col-sm-3">
				<img src="img/tiny-cake.jpg" alt="Cake" class="img-rounded img-responsive">
				<h3>Cakes</h3>
			</div>
			  <div class="col-xs-6 col-sm-3">
				<img src="img/tiny-brownie.jpg" alt="Brownie" class="img-rounded img-responsive">
				<h3>Brownies</h3>
			</div>
			  <div class="col-xs-6 col-sm-3">
				<img src="img/tiny-raw.jpg" alt="Raw" class="img-rounded img-responsive">
				<h3>Raw</h3>

				</div>
			</div>
		</div>
	</div>
		<div class="homepage-recipes-wrapper">
		<div class="container">
	      <div class="row">
			  <div class="col-xs-6 col-sm-3">
				<img src="img/tiny-muffin.jpg" alt="Muffin" class="img-rounded img-responsive">
			    <h3>Muffins</h3>
			</div>
			  <div class="col-xs-6 col-sm-3">
				<img src="img/tiny-bars.jpg" alt="Bars" class="img-rounded img-responsive">
				<h3>Bars</h3>

			</div>
			  <div class="col-xs-6 col-sm-3">
				<img src="img/tiny-tea.jpg" alt="Tea" class="img-rounded img-responsive">
				<h3>Tea Time</h3>
				</div>
				<div class="col-xs-6 col-sm-3">
				<img src="img/tiny-macaroons.jpg" alt="Macaroons" class="img-rounded img-responsive">
				<h3>Ethnic</h3>
			</div>
			</div>
		</div>
	</div>


@endsection
