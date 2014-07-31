@extends('layouts.main')

	@section('content')
	@include('layouts.banner')
	<div class="layout">
	 	<h2>Recent projects</h2>
	 
		<div class="projects">
			@if($projects )
				@foreach($projects as $project)
					
 					<article class="wow fadeInUp animated">
						<a href="{{ URL::route('projects.show', $project->slug) }}">
	 						<figure><img src="/../uploads/{{ $project->thumb }}" alt="{{ $project->title }}"></figure>
	 						<section class="description">
	 							<h2>{{ $project->title }}</h2>
	 						</section>
						</a>	
					</article> 			
				@endforeach
			@endif
		</div>
	</div>

	@stop
	

