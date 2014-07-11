<?php

class SkillsTableSeeder extends Seeder {

	public function run()
	{
		Skills::create([
			'name' => 'HTML',
			'procent' => '100'
		]);

		Skills::create([
			'name' => 'CSS3',
			'procent' => '100'
		]);

		Skills::create([
			'name' => 'JavaScript/jQuery',
			'procent' => '80'
		]);

		Skills::create([
			'name' => 'PHP',
			'procent' => '80'
		]);

		Skills::create([
			'name' => 'MySQL',
			'procent' => '80'
		]);

		Skills::create([
			'name' => 'Laravel',
			'procent' => '50'
		]);

		Skills::create([
			'name' => 'AngularJS',
			'procent' => '30'
		]);
	}

}
