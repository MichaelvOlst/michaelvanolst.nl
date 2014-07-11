<?php

Route::get('/',[
	'as' => 'home', 
	'uses' => 'HomeController@index'
]);

Route::get('projects',[
	'as' => 'projects.index',
	'uses' => 'ProjectsController@index'
]);

Route::get('projects/{slug}',[
	'as' => 'projects.show',
	'uses' => 'ProjectsController@show'
]);

Route::resource('about', 'AboutController');

Route::get('/contact', [
	'as' => 'contact', 
	'uses' => 'ContactController@index'
]);

Route::post('/contact', [
	'as' => 'contact.send', 
	'uses' => 'ContactController@send'
]);

Route::resource('login', 'LoginController');

Route::group(['prefix' => 'admin', 'before' => 'auth'], function(){

	Route::get('/',[
		'as' 	=> 'admin',
		'uses' 	=> 'AdminController@index'
	]);

	Route::get('logout',[
		'as' 	=> 'logout',
		'uses' 	=> 'LoginController@destroy'
	]);

	Route::resource('project', 'ProjectsController', ['except' => ['index', 'show']]);

	Route::resource('admin', 'AdminController');

	Route::resource('about', 'AboutController');

	Route::resource('skills', 'SkillsController', ['except' => ['index', 'show']]);



});

