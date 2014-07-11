@extends('layouts.admin.main')

@section('content')
<div class="dashboard col-md-12 ">	
	<div class="admin-layout">
		<h1>{{ Auth::user()->username }}, What are we going to do today? </h1>
	
		<ul class="list-group">
			@if ($tasks)
				@foreach ($tasks as $task)
					<li class="list-group-item">{{$task->title}} 
						{{ Form::open() }}
							<button type="submit" class="btn btn-naked pull-right"><i class="glyphicon glyphicon-ok"></i></button>
						{{ Form::close() }}

						{{ Form::open() }}
							<button type="submit" class="btn btn-naked pull-right"><i class="glyphicon glyphicon-remove"></i></button>
						{{ Form::close() }}
					</li>
				@endforeach
			@else
				<p>You've completed all of your tasks</p>
			@endif
		</ul>
	</div>
	
</div>



@stop