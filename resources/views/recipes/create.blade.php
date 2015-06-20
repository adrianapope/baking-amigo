@extends('app')

@section('content')
	<h1>Write a New Recipe</h1>

	<hr/>

	<div class="row">
		{!! Form::open(['url' => 'recipes', 'class' => 'col-sm-6']) !!}
			@include ('recipes.form', ['submitButtonText' => 'Submit Recipe'])
		{!! Form::close() !!}
	</div>

	@include ('errors.list')

@stop
