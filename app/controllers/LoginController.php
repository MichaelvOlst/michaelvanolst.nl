<?php

class LoginController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('csrf', ['on' => 'post']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::check()) return Redirect::route('admin')->with('message', 'you are already logged in');
		return View::make('login.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$attempt = Auth::attempt([
			'username' 	=> Input::get('username'),
			'password' 	=> Input::get('password')
		]);

		if($attempt) return Redirect::route('admin')->with('message', 'You are logged in!');

		return Redirect::back()->with('message', 'invalid credentials')->withInput();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();

		return Redirect::route('home')->with('message', 'You have been logged out');
	}

}