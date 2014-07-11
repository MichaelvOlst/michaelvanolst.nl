@extends('layouts.main')

	@section('content')
	<div class="layout">
		<article class="singleprojects cf">

		 	<figure id="slideshow">
		 		@foreach ( $project->images as $images)
		 			<img src="/../uploads/{{ $images->image }}" alt="{{ $project->title}}">
		 		@endforeach
		 	</figure>
		 	<div class="control">
			 	<div id="prev"><i class="fa fa-caret-left"></i></div>
			 	<div id="next"><i class="fa fa-caret-right"></i></div>
		 	</div>
		 	<div class="text cf">
			 	<div class="description cf">
			 		<h1>{{ $project->title }}</h1>
			 		<p>{{ $project->description }}</p>	
			 		<a href="//{{$project->link}}" target="_blank" class="button blue">View site</a>
			 	</div>
		 		<div class="build cf">
		 			<h2>Build with:</h2>
		 			<ul>
		 				@foreach ( explode(',',$project->skills) as $skill)
							<li>{{ $skill }}</li>
		 				@endforeach
						
		 			</ul>
		 		</div>
		 	</div>

		 	<a class="fa fa-long-arrow-left button blue" href="{{URL::route('projects.index')}}"> back</a>

 		</article>
	</div>
	@stop

	@section('scripts')
	
		{{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20130801/jquery.cycle2.min.js') }}
		{{ HTML::script('assets/js/slideshow.js') }}
	@stop

