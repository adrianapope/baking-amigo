
			<div class="form-group">
				{!! Form::label('name', 'Recipe Name:') !!}
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('description', 'Description:') !!}
				{!! Form::textarea('description', null, ['rows'=> '4', 'class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('instructions', 'Instructions:') !!}
				{!! Form::textarea('instructions', null, ['rows'=> '4', 'class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('notes', 'Notes: (optional)') !!}
				{!! Form::textarea('notes', null, ['rows'=> '4', 'class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('published_at', 'Publish On:') !!}
				{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
			</div>

			<div class="row">
				<div class="form-group col-sm-6">
					{!! Form::label('prep_time', 'Prep Time:') !!}
					{!! Form::input('prep_time', null, null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group col-sm-6">
					{!! Form::label('prep_time_type', '&nbsp;') !!}
					{!! Form::select('prep_time_type', ['minutes' => 'Minutes', 'hours' => 'Hours'], null, ['class' => 'form-control']) !!}
				</div>
			</div>

			<div class="row">
				<div class="form-group col-sm-6">
					{!! Form::label('cook_time', 'Cook Time:') !!}
					{!! Form::input('cook_time', null, null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group col-sm-6">
					{!! Form::label('cook_time_type', '&nbsp;') !!}
					{!! Form::select('cook_time_type', ['minutes' => 'Minutes', 'hours' => 'Hours'], null, ['class' => 'form-control']) !!}
				</div>
			</div>

			<div class="row">
				<div class="form-group col-sm-6">
					{!! Form::label('ready_time', 'Ready Time:') !!}
					{!! Form::input('ready_time', null, null, ['class' => 'form-control']) !!}
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
                {!! Form::label('tags', 'Tags:') !!}
                {!! Form::select('tags[]', $tags, null, ['class' => 'form-control', 'multiple']) !!}
            </div>

			<div class="form-group">
				{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
			</div>