<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'username' => 'michael',
			'password' => Hash::make('378834'),
			'email' => 'michaeltje@live.nl'
		]);
	}

}