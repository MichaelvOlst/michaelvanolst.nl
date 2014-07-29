@extends('layouts.main')

	@section('content')
	<div class="layout">
	 
		<div class="projects">

			@if($projects )
				@foreach($projects as $project)
					
 					<article class="wow fadeInUp">
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
	

