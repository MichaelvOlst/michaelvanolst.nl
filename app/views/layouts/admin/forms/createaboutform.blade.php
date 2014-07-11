					
<div class="form-group">
	{{ Form::label('title', 'Title') }}
	{{ Form::text('title', '', ['placeholder' => 'Title', 'class' => 'form-control', 'required']) }}
</div>

<div class="form-group">
	{{ Form::label('story', 'Story') }}
	{{ Form::textarea('story', '', ['placeholder' => 'Story', 'class' => 'form-control', 'required']) }}
</div>



