	<form method="POST" action="/recipes" enctype="multipart/form-data">

	<div class="form-group">
		{!! Form::label('name', 'Recipe Name:') !!}
		{!! Form::text('name', null, ['placeholder' => 'example: Chocolate Chip Cookies', 'class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('description', 'Description:') !!}
		{!! Form::textarea('description', null, ['rows'=> '4', 'placeholder' => 'example: These cookies are chewy and moist. If you are craving chocolate, then this recipe is for you. Perfect when paired with a glass of cold almond milk.', 'class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('ingredients', 'Ingredients:') !!}
		{!! Form::textarea('ingredients', null, ['rows'=> '4', 'placeholder' => 'example: 3 cups flour, 1 cup sugar, 1 tsp. pure vanilla extract, 1/2 cup Earth Balance, 1 bag semi-dark chocolate chips', 'class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('instructions', 'Instructions:') !!}
		{!! Form::textarea('instructions', null, ['rows'=> '4', 'placeholder' => 'example: Mix together dry ingredients in a large bowl. Mix together wet ingredients in a small bowl. Pour wet ingredients into the dry ingredients a slowly until well combined and resembles dough. Create little dough balls and place on a parchment paper lined cookie sheet.', 'class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('notes', 'Helpful Tips: (optional)') !!}
		{!! Form::textarea('notes', null, ['rows'=> '4', 'placeholder' => 'example: Chilling your dough for 24 hours prior to baking can enhance the flavor and texture. Also, make sure to let your baked cookies sit for two minutes on the cookie sheet before transferring to a cooling rack.', 'class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('published_at', 'Publish On:') !!}
		{!! Form::input('date', 'published_at', $recipe->published_at, ['class' => 'form-control']) !!}
	</div>

	<div class="row">
		<div class="form-group col-sm-6">
			{!! Form::label('prep_time', 'Prep Time:') !!}
			{!! Form::input('prep_time', null, null, ['placeholder' => 'example: 25', 'class' => 'form-control']) !!}
		</div>
		<div class="form-group col-sm-6">
			{!! Form::label('prep_time_type', '&nbsp;') !!}
			{!! Form::select('prep_time_type', ['minutes' => 'Minutes', 'hours' => 'Hours'], null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="row">
		<div class="form-group col-sm-6">
			{!! Form::label('cook_time', 'Cook Time:') !!}
			{!! Form::input('cook_time', null, null, ['placeholder' => 'example: 10', 'class' => 'form-control']) !!}
		</div>
		<div class="form-group col-sm-6">
			{!! Form::label('cook_time_type', '&nbsp;') !!}
			{!! Form::select('cook_time_type', ['minutes' => 'Minutes', 'hours' => 'Hours'], null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="row">
		<div class="form-group col-sm-6">
			{!! Form::label('ready_time', 'Ready Time:') !!}
			{!! Form::input('ready_time', null, null, ['placeholder' => 'example: 35', 'class' => 'form-control']) !!}
		</div>
		<div class="form-group col-sm-6">
			{!! Form::label('ready_time_type', '&nbsp;') !!}
			{!! Form::select('ready_time_type', ['minutes' => 'Minutes', 'hours' => 'Hours'], null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('servings', 'Servings:') !!}
		{!! Form::input('servings', 'servings', null, ['placeholder' => 'example: 1 dozen', 'class' => 'form-control']) !!}
	</div>

	<!-- Tags Form Input -->
    <div class-="form-group">
        {!! Form::label('tag_list', 'Tags:') !!}
        {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
    </div>


	<div class="form-group">
		{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	</div>

	@section('footer')
		<script>
			$('#tag_list').select2({
				placeholder: 'Choose a tag',
				//tags: true,
			});
		</script>
	@endsection