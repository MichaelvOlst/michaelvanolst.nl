<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('AboutTableSeeder');
		$this->call('PagesTableSeeder');
		$this->call('SkillsTableSeeder');
	}

}
