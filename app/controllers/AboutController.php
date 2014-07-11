<?php

class AboutController extends \BaseController {

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
		$about = About::all(); 
		$skills = Skills::all();

        return View::make('about.index', compact('about', 'skills'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('about.create')->with('about', About::all());
        return Redirect::route('admin.about.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		About::create([
			'title' => Input::get('title'),
			'story' => Input::get('story')
		]);

		return Redirect::route('admin.about.create');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$about = About::findOrFail($id);
        return View::make('about.edit')->with('about', $about);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$about = About::findOrfail($id);
		$about->title = Input::get('title');
		$about->story = Input::get('story');
		$about->save();

		return Redirect::route('admin.about.create');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$about = About::findOrfail($id);
		$about->delete();

		return Redirect::route('admin.about.create');
	}

}
