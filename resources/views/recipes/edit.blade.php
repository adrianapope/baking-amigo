@extends('app')

@section('content')
	<h1>Edit: {{ $recipe->name }}</h1>

	<div class="row">
		{!! Form::model($recipe, ['method' => 'PATCH', 'action' => ['RecipesController@update', $recipe->id]]) !!}
			@include ('recipes.form', ['submitButtonText' => 'Update Recipe'])
		{!! Form::close() !!}
	</div>

	@include ('errors.list')


@stop
