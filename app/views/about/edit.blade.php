@extends('layouts.admin.main')

@section('content')
<div class="admin">	
	<div class="admin-layout">

		<h1>Edit the story of {{$about->title}}</h1>

			<section class="right col-md-12">
				{{ Form::model($about, ['route' => ['admin.about.update', $about->id], 'method' => 'PATCH', 'role' => 'form']) }}

					@include('layouts.admin.forms.editaboutform')

					<div class="form-group">
						<button type="submit" class="button blue"><i class="glyphicon glyphicon-plus"></i> Save </button>
				
					</div>

				{{ Form::close() }}


			</section>
	</div>

	
</div>



@stop