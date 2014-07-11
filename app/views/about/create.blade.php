@extends('layouts.admin.main')

@section('content')
<div class="about-admin">	
	<div class="admin-layout">
		<h1>Create, edit or remove your story</h1>
		<section class="pull-left col-md-4">
			{{ Form::open(['route' => 'admin.about.store'], ['method' => 'store', 'role' => 'form'])}}
				@include('layouts.admin.forms.createaboutform')

				<div class="form-group">
					<button type="submit" class="button btn-naked blue"><i class="glyphicon glyphicon-plus"></i> Add story</button>
				</div>
			{{ Form::close() }}
		</section>
		
		@if($about)
			@foreach($about as $info)
				<article class="pull-right col-md-7 cf">
					<div class="media">
			 			<div class="media-body">
			    			<h4 class="media-heading">{{ $info->title }}</h4>
			    			{{ $info->story }}
			  			</div>

			  			<div class="edit-delete cf">
							{{ link_to_route('admin.about.edit', 'Edit', [$info->id], ['class' => 'button pull-left']) }}
							
							{{ Form::open(['route' => ['admin.about.destroy', $info->id], 'method' => 'delete'] ) }}
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