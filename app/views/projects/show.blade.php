@extends('layouts.main')

	@section('content')
	
		<article class="singleprojects cf">

		 	<section class="work-bio">
			 	<article class="description">
			 		<h1>{{ $project->title }}</h1>
			 		<p>{{ $project->description }}</p>	
			 	</article>
			 	<div class="toggle">
			 		<article class="build">
			 			<h2>Build with</h2>
			 			<ul>
			 				@foreach ( explode(',',$project->skills) as $skill)
								<li>{{ $skill }}</li>
			 				@endforeach
	 					</ul>
			 		</article>
				 	<a href="//{{$project->link}}" target="_blank" class="link">Visit website</a>
			 		<a class="button fa fa-angle-left" href="{{URL::route('projects.index')}}"></a>
		 		</div>
		 		
			 	<a href="#" class="read-more">Read more +</a>
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

