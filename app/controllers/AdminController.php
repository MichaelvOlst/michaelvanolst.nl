<?php 

class AdminController extends \BaseController{

	public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	public function index()
	{
		$userid = Auth::user()->id;
		$tasks = Tasks::where('user_id', '=', $userid)->get();

		return View::make('admin.index')->with('tasks', $tasks);
	}

	public function create()
	{
		$users = User::all();
		return View::make('admin.create')->with('users', $users);
		return Redirect::route('admin.admin.create');
	}

	public function store()
	{
		User::create([
			'email' => Input::get('email'),
			'username' => Input::get('username'),
			'password' => Hash::make(Input::get('password'))
		]);

		return Redirect::route('admin.admin.create');
	}

	public function edit($id)
	{
		$user = User::findOrFail($id);
		return View::make('admin.edit')->with('user', $user);
	}

	public function update($id)
	{
		$user = User::findOrfail($id);
		$user->username = Input::get('username');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		return Redirect::route('admin.admin.create');
	}

	public function destroy($id)
	{
		$user = User::findOrfail($id);
		$user->delete();

		return Redirect::back();
	}
}