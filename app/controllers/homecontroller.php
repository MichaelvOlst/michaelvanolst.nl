<?php

class HomeController extends \BaseController {


	public function index()
	{
		$projects = Projects::all();

		return View::make('home.index')->with('projects', $projects);
	}

}