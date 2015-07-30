@extends('app')

@section('content')
	<h1>Edit Profile</h1>

	{!! Form::model($user->profile) !!}
		<!-- Location Field -->
		<div class="form-group">
			{!! Form::label('location', 'Location') !!}
			{!! Form::text('location', null, ['class' => 'form-control']) !!}
		</div>


		<!-- Bio Field -->
		<div class="form-group">
			{!! Form::label('bio', 'Bio:') !!}
			{!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
		</div>


		<!-- Twitter_username Field -->
		<div class="form-group">
			{!! Form::label('twitter_username', 'Twitter Username:') !!}
			{!! Form::text('twitter_username', null, ['class' => 'form-control']) !!}
		</div>


		<!-- Instagram_username Field -->
		<div class="form-group">
			{!! Form::label('instagram_username', 'Instagram Username:') !!}
			{!! Form::text('instagram_username', null, ['class' => 'form-control']) !!}
		</div>


		<!-- Update Profile Field -->
		<div class="form-group">
			{!! Form::submit('Update Profile', ['class' => 'btn btn-success']) !!}


	{!! Form::close() !!}

	@stop