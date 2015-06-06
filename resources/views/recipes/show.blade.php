 @extends('app')

@section('content')

<h1>{{ $recipe->name }}</h1>
	
	<article>
		<h3>Description</h3>
		{{ $recipe->description }}

		<h3>Instructions</h3>
		{{ $recipe->instructions }}

		<h3>Notes</h3>
		{{ $recipe->notes }}
	</article>


@stop