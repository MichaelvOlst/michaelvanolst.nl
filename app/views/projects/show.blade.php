@extends('layouts.main')

	@section('content')
	
		<article class="singleprojects cf">

		 	<section class="work-bio">
			 	<article class="description">
			 		<h1>{{ $project->title }}</h1>
			 		<p>{{ $project->description }}</p>	
			 	</article>
		 		<article class="build">
		 			<h2>Build with:</h2>
		 			<ul>
		 				@foreach ( explode(',',$project->skills) as $skill)
							<li>{{ $skill }}</li>
		 				@endforeach
 					</ul>
		 		</article>
		 		<a class="fa fa-long-arrow-left button" href="{{URL::route('projects.index')}}"> back</a>
			 	<a href="//{{$project->link}}" target="_blank" class="button ">View site</a>
		 	</section>
		 	
		 	 <section id="pictures">
		 	 	<ul>
			 		@foreach ( $project->images as $images)
			 			<li><img src="/../uploads/{{ $images->image }}" alt="{{ $project->title}}"></li>
			 		@endforeach
		 		</ul>
		 	</section>

		 	

 		</article>
 		
 		
	@stop

	@section('scripts')
	
		{{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20130801/jquery.cycle2.min.js') }}
		{{ HTML::script('assets/js/slideshow.js') }}
	@stop

