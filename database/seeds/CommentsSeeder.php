<?php

use App\Review;
use App\Comment;
use App\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CommentsSeeder extends Seeder {

	/**
	 * Run the comments table seeds to generate reviews and comments.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		Comment::create([
			'id'		 => 1,
			'recipe_id'  => 1,
			'user_id' 	 => 1,
			'review_id'  => 1,
 			'body' 		 => 'This recipe was fantastic.'
		]);

		Comment::create([
			'id'		 => 2,
			'recipe_id'  => 1,
			'user_id' 	 => 1,
			'review_id'  => 2,
			'body' 		 => 'This recipe was great, but not the best.'
		]);

		Comment::create([
			'id'		 => 3,
			'recipe_id'  => 1,
			'user_id' 	 => 1,
			'review_id'  => 3,
			'body' 		 => 'This recipe was not very good.'
		]);

		Comment::create([
			'id'		 => 4,
			'recipe_id'  => 1,
			'user_id' 	 => 1,
			'review_id'  => 4,
			'body' 		 => 'This recipe was bad!'
		]);

		Comment::create([
			'id'		 => 5,
			'recipe_id'  => 1,
			'user_id' 	 => 1,
			'review_id'  => null,
			'body' 		 => 'This look yummy! I want to bake this soon.'
		]);
	}

}