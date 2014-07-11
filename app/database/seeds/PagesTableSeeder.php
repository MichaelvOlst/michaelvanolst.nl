<?php

class PagesTableSeeder extends Seeder {

	public function run()
	{
		Pages::create([
			'pages' => '/',
			'title' => 'Home'
		]);

		Pages::create([
			'pages' => 'projects',
			'title' => 'Projects'
		]);

		Pages::create([
			'pages' => 'about',
			'title' => 'About'
		]);

		Pages::create([
			'pages' => 'contact',
			'title' => 'Contact'
		]);
	}

}
