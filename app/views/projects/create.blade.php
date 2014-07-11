@extends('layouts.admin.main')

@section('content')
<div class="admin-project">	
	<div class="admin-layout">

		<h1>Create, edit or remove projects</h1>

		<section class="left col-md-4 ">
 			<ul class="list-group">
				@if ($projects)
					@foreach ($projects as $project)
						<li class="list-group-item">{{$project->title}} 
							<a class="pull-right" href={{URL::route('admin.project.edit', $project->id) }}><i class="glyphicon glyphicon-pencil"></i></a>

							{{ Form::open(['route' => ['admin.project.destroy', $project->id], 'method' => 'delete'] ) }}
			            		<button type="submit" class="pull-right btn-naked destroy"><i class="glyphicon glyphicon-remove"></i></button>
			            	{{ Form::close() }}
						</li>
					@endforeach
			@else
				<p>You've completed all of your tasks</p>
			@endif				
		</section>
			<section class="right col-md-7">
				{{ Form::open(['route' => ['admin.project.store'], 'method' => 'store', 'role' => 'form', 'files' => true]) }}

					@include('layouts.admin.forms.createprojectform')

					<div class="form-group">
						<button type="submit" class="btn btn-primary form-control"><i class="glyphicon glyphicon-plus"></i> Add New Project</button>
				
					</div>

				{{ Form::close() }}


			</section>
	</div>

	
</div>



@stop