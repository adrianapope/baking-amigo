<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description')->nullable();
			$table->text('instructions');
			$table->text('notes')->nullable();
			$table->timestamps();
			$table->timestamp('published_at');
			$table->integer('prep_time');
			$table->string('prep_time_type');
			$table->integer('cook_time');
			$table->string('cook_time_type');
			$table->integer('ready_time');
			$table->string('ready_time_type');
			$table->integer('servings');  
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recipes');
	}

}
