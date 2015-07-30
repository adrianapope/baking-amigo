@extends('app')

@section('content')
	<div class="container">
		<div class="profiles-index">
			<h2>{{ $user->name }} <small> {{ $user->profile->location }}</small></h2>
			<div class="bio">
				<p>
					{{ $user->profile->bio }}
				</p>
			</div>
			<ul class="links">
				<li>{!! link_to('http://twitter.com/' . $user->profile->twitter_username, 'Find Me On Twitter') !!}</li>
				<li>{!! link_to('http://instagram.com/' . $user->profile->instagram_username, 'View My Pics On Instagram') !!}</li>
			</ul>

			<div class="page-navigation-wrapper">
				@if( Auth::user() && Auth::user()->id == $user->id)
					<a href="/users/{{ $user->id }}/edit"><span class="btn btn-success">Edit Your Profile</span></a>
				@endif
			</div>
		</div>
	</div>
@stop
