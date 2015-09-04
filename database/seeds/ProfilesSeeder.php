<?php

use App\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProfilesSeeder extends Seeder {

	/**
	 * Run the Profiles table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		Profile::create([
			'id'		 		     => 1,
			'user_id'		 		 => 1,
			'bio'					 => 'I like to soccer, women, and beer.',
 			'location' 				 => 'Long Beach, CA',
			'twitter_username' 		 => 'johnsfeed',
			'instagram_username' 	 => 'johnwashere',
		]);


		Profile::create([
			'id'		 		     => 2,
			'user_id'		 	     => 2,
			'bio'					 => 'I like to cooking, reading, and swimming.',
			'location' 		 		 => 'Oceanside, CA',
			'twitter_username' 	 	 => 'karenwho',
			'instagram_username' 	 => 'karenthequeen',
		]);


		Profile::create([
			'id'		 		     => 3,
			'user_id'		 		 => 3,
			'bio'					 => 'I like eating raw food and yoga.',
			'location' 		 		 => 'San Francisco, CA',
			'twitter_username' 	 	 => 'janesworld',
			'instagram_username' 	 => 'janedidit',
		]);
	}

}

