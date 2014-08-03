@if (Session::has('message') )
	<div class="flash-message">
		{{ Session::get('message') }}
	</div>
@endif