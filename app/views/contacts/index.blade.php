@extends('layouts.main')

@section('content')
<div class="contact">	
<section id="maps"></section>
	<div class="layout">

		
		<h1>If you have a great idea that you like to share with me or like to talk to me, contact me via the form below or contact me at facebook or other social networks</h1>

		<section class="form">

			{{ Form::open(['route' => 'contact.send', 'novalidate']) }}

				<div class="formgroup">
					{{ Form::text('name', '', ['placeholder' => 'Name']) }}
					{{ $errors->first('name', '<span>:message</span>')}}
				</div>
				
				<div class="formgroup">
					{{ Form::email('email','', ['placeholder' => 'Email']) }}
					{{ $errors->first('email', '<span>:message</span>')}}
				</div>
				<div class="formgroup">
					{{ Form::textarea('formMessage', '', ['placeholder' => 'Message']) }}
					{{ $errors->first('formMessage', '<span>:message</span>')}}
				</div>
				<div class="formgroup">
					{{ Form::submit('Send', ['class' => 'submit']) }}
				</div>
				
			{{ Form::close() }}
			
		</section>
	</div>
	
</div>



@stop