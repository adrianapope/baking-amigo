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
					<div class="col-sm-9">
						<h5>By UsernameGoesHere</h5>
					</div>
					<div class="col-sm-3">
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
				</div>
			</div>{{-- big column 9 in section ends here --}}
		</div> {{--end first row in section--}}

		<hr>


		<div class="row">
			<div class="col-sm-4 media-left">
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
			<div class="col-sm-8 media-right">
				<a href="#"><i class="fa fa-heart-o fa-4x fa-pull-right"></i></a>
			</div>
		</div>{{-- end second row in section--}}

	</div>
</div>

@stop

