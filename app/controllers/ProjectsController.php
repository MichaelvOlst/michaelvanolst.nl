<?php

use \vanolst\Images\Images as Images;

class ProjectsController extends \BaseController {

	protected $images;

	public function __construct(Images $images)
	{
		$this->beforeFilter('csrf', array('on' => 'post'));
		$this->images = $images;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Projects::with('images')->get(); 

        return View::make('projects.index')->with('projects', $projects);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$projects = Projects::all();

        return View::make('projects.create')->with('projects',$projects);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		$images = Input::file('images');
		try{
			$this->images->saveImages($images, path());
		} catch(Exception $e){
			return $e->getMessage();
		}

		Projects::create([
			'title' 		=> Input::get('title'),
			'thumb' 		=> $images[0]->getClientOriginalName(),
			'description' 	=> Input::get('description'),
			'slug' 			=> createSlug(Input::get('slug')),
			'link'			=> Input::get('link'),
			'skills'		=> get_all_skills(Input::get('skills'))
		])->images()->saveMany($this->images->store());

		return Redirect::route('admin.project.create');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
	  
	 	$project = Projects::with('images')->whereSlug($slug)->first();

		if (!$project){
			return Redirect::route('projects.index')->with('flash_message_wrong', 'Project doesn\'t exists !');
		}

        return View::make('projects.show')->with('project', $project);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
       $project = Projects::findOrFail($id);

       return View::make('projects.edit')->with('project', $project);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$images = Input::file('images');
		try{
			$this->images->saveImages($images, path());
		} catch(Exception $e){
			return $e->getMessage();
		}

		$project = Projects::findOrFail($id);
		$project->title 		= Input::get('title');
		$project->thumb 		= $images[0]->getClientOriginalName();
		$project->description 	= Input::get('description');
		$project->slug 			= createSlug(Input::get('slug'));
		$project->link 			= Input::get('link');
		$project->skills 		= get_all_skills(Input::get('skills'));
		$project->save();

		$oldimage = Images::where('projects_id', '=', $project->id);
		$oldimage->delete();

		foreach($this->images->update() as $image)
		{
			$newImage = new Images;
			$newImage->projects_id = $project->id;
			$newImage->image = $image;
			$newImage->save();
		}
		return Redirect::route('admin.project.create');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$project = Projects::findOrFail($id);

		$project->delete();

		return Redirect::back();

	}

}