@extends('layouts.admin.main')

@section('content')
<div class="skills-admin">	
	<div class="admin-layout">

		<h1>Create, edit or remove your story</h1>
		<section class="pull-left col-md-4">
			{{ Form::open(['route' => 'admin.skills.store'], ['method' => 'store', 'role' => 'form'])}}
				@include('layouts.admin.forms.createskillsform')

				<div class="form-group">
					<button type="submit" class="button btn-naked blue"><i class="glyphicon glyphicon-plus"></i> Add skill</button>
				</div>
			{{ Form::close() }}
		</section>
		
		@if($skills)
			@foreach($skills as $skill)
				<article class="pull-right col-md-7 cf">
					<div class="media">
			 			<div class="media-body">
			    			<h4 class="media-heading">{{ $skill->name }}</h4>
			    			@if ($skill->procent >= 80)
				    			<div class="progress">
	  								<div class="progress-bar progress-bar-succes" role="progressbar" aria-valuenow="{{ $skill->procent }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->procent }}%;">
	    								{{ $skill->procent }}%
	  								</div>
								</div>

							@elseif($skill->procent < 79 && $skill->procent >= 50)
								<div class="progress">
	  								<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ $skill->procent }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->procent }}%;">
	    								{{ $skill->procent }}%
	  								</div>
								</div>
							@else
								<div class="progress">
	  								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ $skill->procent }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->procent }}%;">
	    								{{ $skill->procent }}%
	  								</div>
								</div>
							@endif
			  			</div>

			  			<div class="edit-delete cf">
							{{ link_to_route('admin.skills.edit', 'Edit', [$skill->id], ['class' => 'button pull-left']) }}
							
							{{ Form::open(['route' => ['admin.skills.destroy', $skill->id], 'method' => 'delete'] ) }}
					            <button type="submit" class="pull-left button btn-naked"><i class="glyphicon glyphicon-remove"></i></button>
					        {{ Form::close() }}
			        	</div>
					</div>
				</article>
			@endforeach
		@endif
		
	</div>

	
</div>



@stop