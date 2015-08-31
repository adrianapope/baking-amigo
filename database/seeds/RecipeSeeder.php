<?php

use App\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RecipeSeeder extends Seeder {

	/**
	 * Run the recipe table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		Recipe::create([
			'id'		 	 => 1,
			'name' 			 => 'Chocolate Chip Cookie',
			'user_id' 		 => 1,
			'description' 	 => 'Moist and chewy',
			'ingredients' 	 => '1 cup sugar, 1 cup flour, 1 cup chocolate chips',
			'instructions'   => 'Mix ingredients together in a bowl',
			'notes' 		 => 'Chill dough beforehand',
			'cook_time'      => 10,
			'cook_time_type' => 'minutes'
		]);

		Recipe::create([
			'id'		 	 => 2,
			'name' 			 => 'Special Brownies',
			'user_id' 		 => 1,
			'description' 	 => 'Chocolatey and dense',
			'ingredients' 	 => '1 cup sugar, 1 cup flour, 1 cup cocoa',
			'instructions'   => 'Mix ingredients together in a bowl',
			'notes' 		 => 'add walnuts if desired',
			'cook_time'      => 10,
			'cook_time_type' => 'minutes'
		]);

		Recipe::create([
			'id'		 	 => 3,
			'name' 			 => 'Vanilla Cake',
			'user_id' 		 => 1,
			'description' 	 => 'If you like vanilla, this is for you!',
			'ingredients' 	 => '1 cup sugar, 1 cup flour, 1 tsp pure vanilla extract',
			'instructions'   => 'Mix ingredients together in a bowl',
			'notes' 		 => 'Ice cake once room temperature',
			'cook_time'      => 10,
			'cook_time_type' => 'minutes'
		]);
	}

}
