<?php

class SkillsController extends \BaseController {


	/**
	 * Show the form for creating a new resource.
	 * GET /skills/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('skills.create')->with('skills', Skills::all());
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /skills
	 *
	 * @return Response
	 */
	public function store()
	{
		Skills::create([
			'name' => Input::get('skill'),
			'procent' => Input::get('procent')
		]);

		return Redirect::route('admin.skills.create');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /skills/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$skill = Skills::findOrFail($id);
		return View::make('skills.edit')->with('skill', $skill);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /skills/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$skill = Skills::findOrFail($id);
		$skill->name = Input::get('skill');
		$skill->procent = Input::get('procent');
		$skill->save();

		return Redirect::route('admin.skills.create');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /skills/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$skill = Skill::findOrFail($id);
		$skill->delete();

		return Redirect::route('admin.skills.create');
	}

}