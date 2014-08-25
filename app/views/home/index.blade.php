@extends('layouts.main')

	@section('content')
	@include('layouts.includes.banner')
	<div class="projects">
		<div class="layout">
			<div class="section-header">
			 	<h2>Recent projects</h2>
			</div>
		 
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