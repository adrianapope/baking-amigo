
@if (count($errors) > 0)
	<div class="alert alert-danger alert-important alert-permanent alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif


@if (Session::has('flash_message'))
	<div class="alert alert-success {{ Session::has('flash_message_important') ? 'alert-important' : '' }}">
		@if (Session::has('flash_message_important'))
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
		@endif
		{{ Session::get('flash_message') }}
	</div>
@endif

@if (Session::has('flash_message_permanent'))
	<div class="alert alert-success alert-permanent {{ Session::has('flash_message_important') ? 'alert-important' : '' }}">
		@if (Session::has('flash_message_important'))
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
		@endif
		{{ Session::get('flash_message_permanent') }}
	</div>
@endif
