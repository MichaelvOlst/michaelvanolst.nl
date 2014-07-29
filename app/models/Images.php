<?php

class Images extends Eloquent {

	protected $fillable = array('image', 'projects_id');

	public function projects()
	{
		return $this->belongsTo('Projects');
	}
	
}
