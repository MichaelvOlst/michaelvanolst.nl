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
<body id="body">

	@if (Session::has('flash_message_wrong') )
   		<div class="flash-message wrong fa fa-flash">
   			{{ Session::get('flash_message_wrong') }}
    	</div>
    @endif

    @if (Session::has('mail_message') )
		<div class="flash-message mail fa fa-envelope">
			{{ Session::get('mail_message') }}
		</div>
    @endif

     @if (Session::has('flash_message') )
		<div class="flash-message wrong fa fa-bullhorn">
			{{ Session::get('flash_message') }}
		</div>
    @endif

    @include('layouts.nav')

	

	<header>
		<div class="layout ">
			<h1 class="brand"><a href="{{ URL::route('home') }}">Michael van Olst</a></h1>
			<div class="menu-toggle fa fa-bars"></div>
		</div>
	</header>

	<section class="container" role="mainsection">
		@yield('content')
	</section>
	@include('layouts.footer')	



	

