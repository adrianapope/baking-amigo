<?php

use App\Review;
use App\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ReviewsSeeder extends Seeder {

	/**
	 * Run the reviews table seeds to generate reviews.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		Review::create([
			'id'		 => 1,
			'recipe_id'  => 1,
			'user_id' 	 => 1,
			'comment_id' => 1,
 			'rating' 	 => 5
		]);

		Review::create([
			'id'		  => 2,
			'recipe_id'   => 1,
			'user_id'     => 1,
			'comment_id'  => 2,
			'rating'      => 4,
		]);

		Review::create([
			'id'		  => 3,
			'recipe_id'   => 1,
			'user_id' 	  => 1,
			'comment_id'  => 3,
			'rating' 	  => 3
		]);

		Review::create([
			'id'		 => 4,
			'recipe_id'  => 1,
			'user_id' 	 => 1,
			'comment_id' => 4,
			'rating' 	 => 2
		]);

	}
}
