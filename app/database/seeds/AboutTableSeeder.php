<?php

class AboutTableSeeder extends Seeder {

	public function run()
	{
		About::create([
			'title' => 'Michael van Olst',
			'story' => 
				'I am Michael van Olst, a webdeveloper from the Netherlands. After reading a lot of books and watching tutorials and trying to get more experience by building other websites. I decided it was the time for building my own one. And this is the result. Let me know what you think about it.'
		]);
	}

}						
