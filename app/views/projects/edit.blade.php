@extends('layouts.admin.main')

@section('content')
<div class="admin-project">	
	<div class="admin-layout cf">
			<h1>Update {{ $project->title }}</h1>
			<section class="right col-md-12">

				{{ Form::open(['route' => ['admin.project.update', $project->id], 'method' => 'PATCH', 'role' => 'form', 'files' => true]) }}

					@include('layouts.admin.forms.editprojectform')

					<div class="form-group">
						<button type="submit" class="btn btn-primary form-control"><i class="glyphicon glyphicon-plus"></i> Save Project</button>
				
					</div>

				{{ Form::close() }}


			</section>
	</div>

	
</div>



@stop