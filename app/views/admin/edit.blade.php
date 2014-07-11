@extends('layouts.admin.main')

@section('content')
<div class="admin">	
	<div class="admin-layout">

		<h1>Edit {{$user->username}}</h1>

			<section class="right col-md-12">
				{{ Form::model($user, ['route' => ['admin.admin.update', $user->id], 'method' => 'PATCH', 'role' => 'form']) }}

					@include('layouts.admin.forms.edituserform')

					<div class="form-group">
						<button type="submit" class="button blue"><i class="glyphicon glyphicon-plus"></i> Save user</button>
				
					</div>

				{{ Form::close() }}


			</section>
	</div>

	
</div>



@stop