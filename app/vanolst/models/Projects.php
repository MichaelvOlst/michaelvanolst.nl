<?php

class Projects extends \Eloquent {
	protected $fillable = array('title', 'description', 'slug', 'link', 'thumb', 'skills' );

	public function images()
	{
		return $this->hasMany('Images');
	}
}