					
<div class="form-group">
	{{ Form::label('username', 'Username') }}
	{{ Form::text('username', $user->username, ['placeholder' => 'Enter your username', 'class' => 'form-control', 'required']) }}
</div>

<div class="form-group">
	{{ Form::label('email', 'Email') }}
	{{ Form::text('email', $user->email, ['placeholder' => 'Enter your email', 'class' => 'form-control', 'required']) }}
</div>

<div class="form-group">
	{{ Form::label('password', 'Password') }}
	{{ Form::text('password', '', ['placeholder' => 'Enter your password', 'class' => 'form-control', 'required']) }}
</div>


