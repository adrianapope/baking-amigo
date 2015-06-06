@extends('app')

@section('content')
	<h1>Write a New Recipe</h1>

	<hr/>

	{!! Form::open(['url' => 'recipes']) !!}
		<div class="form-group">
		{!! Form::label('name', 'Recipe Name:') !!} 
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('description', 'Description:') !!}
		{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('instructions', 'Instructions:') !!}
		{!! Form::textarea('instructions', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('notes', 'Notes (Optional):') !!}
		{!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
		</div>
		
		
		
		<div class="form-group">
		{!! Form::submit('Submit Recipe', ['class' => 'btn btn-primary form-control']) !!}

		<div class="form-group">
		{!! Form::label('published_at', 'Publish On:') !!}
		{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
		</div>


	{!! Form::close() !!}
@stop  
