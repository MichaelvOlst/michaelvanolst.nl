					
<div class="form-group">
	{{ Form::label('title', 'Title') }}
	{{ Form::text('title', $project->title, ['placeholder' => 'Enter the title', 'class' => 'form-control', 'required']) }}
</div>

<div class="form-group">
	{{ Form::label('description', 'Description') }}
	{{ Form::textarea('description', $project->description, ['placeholder' => 'Enter the escription', 'class' => 'form-control', 'required']) }}
</div>

<div class="form-group">
	{{ Form::label('images', 'Images') }}
	<input type="file" name="images[]" multiple>
</div>

<div class="form-group">
	{{ Form::label('slug', 'Slug') }}
	{{ Form::text('slug', $project->slug, ['placeholder' => 'Enter the slug', 'class' => 'form-control'], 'required') }}
</div>

<div class="form-group">
	{{ Form::label('link', 'Link') }}
	{{ Form::text('link', $project->link, ['placeholder' => 'Enter the link', 'class' => 'form-control'], 'required') }}
</div>

<div class="checkbox">
	{{ Form::label('html5', 'html5 ') }}
	{{ Form::checkbox('skills[]', 'html5', false) }}
</div>

<div class="checkbox">
	{{ Form::label('css3', 'css3') }}
	{{ Form::checkbox('skills[]', 'css3', false) }}
</div>

<div class="checkbox">
	{{ Form::label('jQuery', 'jQuery') }}
	{{ Form::checkbox('skills[]', 'jQuery', false) }}
</div>

<div class="checkbox">
	{{ Form::label('php', 'php') }}
	{{ Form::checkbox('skills[]', 'php', false) }}
</div>

<div class="checkbox">
	{{ Form::label('mysql', 'mysql') }}
	{{ Form::checkbox('skills[]', 'mysql', false) }}
</div>

<div class="checkbox">
	{{ Form::label('laravel', 'laravel') }}
	{{ Form::checkbox('skills[]', 'laravel', false) }}
</div>

<div class="checkbox">
	{{ Form::label('AngularJS', 'Angular') }}
	{{ Form::checkbox('skills[]', 'AngularJS', false) }}
</div>


