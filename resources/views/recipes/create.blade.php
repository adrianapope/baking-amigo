@extends('app')

@section('content')
	<div class="container">
		<div class="create-index">
			<h1>Write a New Recipe</h1>
			<hr/>
				<div class="create-index-wrapper">
					{!! Form::model($recipe = new \App\Recipe, ['url' => 'recipes', 'class' => 'col-sm-6']) !!}
						@include ('recipes.form', ['submitButtonText' => 'Submit Recipe'])
					{!! Form::close() !!}
				</div>
		</div>
	</div>
	<div class="errors-wrapper">
	@include ('errors.list')
	</div>
@stop
