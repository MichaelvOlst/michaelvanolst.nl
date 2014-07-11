@extends('layouts.admin.main')

@section('content')
<div class="admin">	
	<div class="admin-layout">

		<h1>Create, edit or remove admins</h1>

		<section class="left col-md-4 ">
 			<ul class="list-group">
 				@if ($users)
 					@foreach($users as $user)
 						<li class="list-group-item">{{$user->username}} 
							<a class="pull-right" href={{URL::route('admin.admin.edit', $user->id) }}><i class="glyphicon glyphicon-pencil"></i></a>

							{{ Form::open(['route' => ['admin.admin.destroy', $user->id], 'method' => 'delete'] ) }}
			            		<button type="submit" class="pull-right btn-naked destroy"><i class="glyphicon glyphicon-remove"></i></button>
			            	{{ Form::close() }}
						</li>
 					@endforeach
 				@endif
			</ul>			
		</section>
			<section class="right col-md-7">
				{{ Form::open(['route' => ['admin.admin.store'], 'method' => 'store', 'role' => 'form']) }}

					@include('layouts.admin.forms.createuserform')

					<div class="form-group">
						<button type="submit" class="button blue"><i class="glyphicon glyphicon-plus"></i> Add user</button>
					</div>

				{{ Form::close() }}


			</section>
	</div>

	
</div>



@stop