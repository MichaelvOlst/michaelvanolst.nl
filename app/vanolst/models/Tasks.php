<?php

class Tasks extends \Eloquent {
	protected $fillable = ['title', 'body', 'completed'];

	public function user()
	{
		return $this->belongsTo('User');
	}
}