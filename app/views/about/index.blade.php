@extends('layouts.main')

@section('content')
	<div class="about">
		<section class="info">
			<div class="layout">
				@foreach ($about as $info) 
					<h1 class="animated bounceInLeft">{{ $info->title }}</h1>
					<p class="about animated bounceInLeft">{{ nl2br($info->story) }}</p>
					<img class="animated bounceInRight" src="assets/images/michaelvanolst.jpg" alt="">
					<a href="{{ URL::route('contact') }}" class="button white animated bounceInLeft"> Get in touch</a>
					
				@endforeach
 			</div>
 		</section>

		<div id="#skills" class="skills-holder">
	 		<div class="layout">
		 		@foreach($skills as $skill)
			 		<div class="skills">
			 			{{ $skill->name }}
			 			<div class="bar">
			 				<span data-procent="{{ $skill->procent }}"></progress>  
			 			</div>
			 		</div>
		 		@endforeach
	 		</div>
	 	</div>

 	</div>
 	
@stop