<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create([
				'username' => 'michael',
				'password' => Hash::make('378834'),
				'email' => 'michaeltje@live.nl'
			]);
		}
	}

}