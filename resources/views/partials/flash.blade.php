
@if (session()->has('flash_message'))

	<script>
		swal({
			title: "{{ session('flash_message.title') }}",
			text: "{{ session('flash_message.message') }}",
			type: "{{ session('flash_message.level') }}",
			timer: 1700,
			showConfirmButton: false
		});
	</script>
@endif

@if (session()->has('flash_message_overlay'))

	<script>
		swal({
			title: "{{ session('flash_message_overlay.title') }}",
			text: "{{ session('flash_message_overlay.message') }}",
			type: "{{ session('flash_message_overlay.level') }}",
			ConfirmButtonText: 'Okay'
		});
	</script>
@endif



{{-- @if (Session::has('flash_message'))
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
 --}}