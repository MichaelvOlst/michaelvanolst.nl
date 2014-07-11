					
<div class="form-group">
	{{ Form::label('skill', 'Skill') }}
	{{ Form::text('skill', $skill->name, ['placeholder' => 'Skill', 'class' => 'form-control', 'required']) }}
</div>

<div class="form-group">
	{{ Form::label('procent', 'Procent') }}
	{{ Form::text('procent', $skill->procent, ['placeholder' => 'Procent', 'class' => 'form-control', 'required']) }}
</div>



