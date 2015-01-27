<?php

class ContactController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('contacts.index');
	}

	public function send()
	{
		$rules = [
			'name' 			=> 'required|min:3',
			'email' 		=> 'required|email',
			'formMessage' 	=> 'required|min:5'
		];

		$data = Input::all();

		$validator = Validator::make($data, $rules);

		if ($validator->fails()) return Redirect::back()->withInput()->withErrors($validator->messages());
		

		Mail::queue('emails.contactform', $data, function($message) use ($data){
			$message->to(getenv("EMAIL_USER"))->subject('Contactform');
		});

		return Redirect::route('home')->with('message', 'Thanks for sending me an email!');

	}

}
