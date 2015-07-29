@extends('app')

@section('content')
	<div class="container">
		<div class="profiles-index">
			<h1>Profile</h1>
				<div class="page-navigation-wrapper">
					@if( Auth::user()->id == $user->id)
						<a href="#"><span class="btn btn-success">Edit Profile</span></a>
					@endif
				</div>
		</div>
	</div>
@stop