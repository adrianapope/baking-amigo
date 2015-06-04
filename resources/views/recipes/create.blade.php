@extends('app')

@section('content')
	<h1>Write a New Recipe</h1>

	<hr/>

	{!! Form::open(['url' => 'recipes']) !!}
		<div class="form-group">
		{!! Form::label('title', 'Title:') !!} 
		{!! Form::text('PDF_set_info_title()', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
		{!! Form::submit('Submit Recipe', ['class' => 'btn btn-primary form-control']) !!}


	{!! Form::close() !!}
@stop  
