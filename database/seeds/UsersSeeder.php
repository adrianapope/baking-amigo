<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersSeeder extends Seeder {

	/**
	 * Run the User table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		User::create([
			'id'		 => 1,
			'name' 		 => 'John Doe',
			'email' 	 => 'johndoe@gmail.com',
			'password' 	 => Hash::make('dogface'),
		]);


		User::create([
			'id'		 => 2,
			'name' 		 => 'Karen Black',
			'email' 	 => 'karenblack@gmail.com',
			'password' 	 => Hash::make('ratface'),
		]);


		User::create([
			'id'		 => 3,
			'name' 		 => 'Jane Smith',
			'email' 	 => 'janesmith@gmail.com',
			'password' 	 => Hash::make('catface'),
		]);
	}

}

