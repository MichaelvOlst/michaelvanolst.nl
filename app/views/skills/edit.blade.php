@extends('layouts.admin.main')

@section('content')
<div class="admin">	
	<div class="admin-layout">

		<h1>Edit your skill {{$skill->name}}</h1>

			<section class="right col-md-6 col-md-offset-3">
				{{ Form::model($skill, ['route' => ['admin.skills.update', $skill->id], 'method' => 'PATCH', 'role' => 'form']) }}

					@include('layouts.admin.forms.editskillsform')

					<div class="form-group">
						<button type="submit" class="button blue"><i class="glyphicon glyphicon-plus"></i> Save Skill</button>
				
					</div>

				{{ Form::close() }}


			</section>
	</div>

	
</div>



@stop