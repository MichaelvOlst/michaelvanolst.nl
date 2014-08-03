<!doctype html>
<html lang="en">
<head>
	<title>Michael van Olst</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Laravel PHP Framework</title>
	{{ HTML::style('assets/stylesheets/styles.css') }}
 	{{ HTML::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js') }}
<body id="form-only">

	@include('layouts.includes.flash')
	<div class="login">	
		<section class="container" role="mainsection">
			<section class="loginform">
				<h1>Michael van Olst</h1>
				{{ Form::open(['route' => 'login.store']) }}
					
					<div class="formgroup">
						{{ Form::text('username', '', ['placeholder' => 'Username', 'autofocus']) }}
					</div>

					<div class="formgroup">
						{{ Form::password('password', ['placeholder' => 'Password']) }}
					</div>
					
					<div class="formgroup">
					{{ Form::submit('Sign in') }}
					</div>

				{{ Form::close() }}
			</section>
		</section>
	</div>
@include('layouts.admin.footer')
	