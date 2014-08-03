<!doctype html>
<html lang="en">
<head>
	<title>Michael van Olst</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Laravel PHP Framework</title>
    {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css') }}
	{{ HTML::style('assets/stylesheets/styles.css') }}

 	{{ HTML::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js') }}
<body id="body">

	@include('layouts.includes.flash')

    @include('layouts.admin.nav')
 
	<section class="container" role="mainsection">
		@yield('content')
	</section>

	@include('layouts.admin.footer')
	

