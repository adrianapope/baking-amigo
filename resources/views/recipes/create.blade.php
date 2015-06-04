@extends('app')

@section('content')
	<h1>Write a New Recipe</h1>

	<hr/>

	{!! Form::open(['url' => 'recipes']) !!}
		<div class="form-group">
		{!! Form::label('title', 'Title:') !!} 
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('description', 'Description:') !!}
		{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
		{!! Form::submit('Submit Recipe', ['class' => 'btn btn-primary form-control']) !!}


	{!! Form::close() !!}
@stop  
