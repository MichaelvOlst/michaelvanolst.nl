<!doctype html>
<html lang="en">
<head>
	<title>Michael van Olst</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Laravel PHP Framework</title>
	{{ HTML::style('assets/stylesheets/styles.css') }}
 	{{ HTML::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js') }}
 	{{ HTML::script('assets/js/wow.min.js') }}
 	{{ HTML::script('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false') }}
 	<script>
 		new WOW().init();
	</script>
</head>
<body id="body" class="{{ background_active() }}-background">

    @include('layouts.includes.flash')

    @include('layouts.includes.nav')

    @include ('layouts.includes.header')

	<section class="container" role="mainsection">
		@yield('content')
	</section>
	
	@include('layouts.includes.footer')	



	

