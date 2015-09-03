@extends('app')

@section('content')
	<div class="container">
		<div class="edit-index">
			<h1>Edit: {{ $recipe->name }}</h1>
				<div class="edit-index-wrapper">
				{!! Form::model($recipe, ['method' => 'PATCH', 'action' => ['RecipesController@update', $recipe->id]]) !!}
					@include ('recipes.form', ['submitButtonText' => 'Update Recipe'])
				{!! Form::close() !!}
				</div>
		</div>
	</div>
@stop
