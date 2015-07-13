@extends('app')

@section('content')
	<h1>Write a New Recipe</h1>

	<hr/>

	<div class="row">
		{!! Form::model($recipe = new \App\Recipe, ['url' => 'recipes', 'class' => 'col-sm-6']) !!}
			@include ('recipes.form', ['submitButtonText' => 'Submit Recipe'])
		{!! Form::close() !!}
	</div>

	@include ('errors.list')

@stop
