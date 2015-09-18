<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration {

	/**
	 * Run the Recipes migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('user_id')->unsigned();
			$table->text('ingredients');
			$table->text('description')->nullable();
			$table->text('instructions');
			$table->text('notes')->nullable();
			$table->float('avg_rating');
			$table->timestamps();
			$table->timestamp('published_at');
			$table->integer('prep_time')->nullable();
			$table->string('prep_time_type')->nullable();
			$table->integer('cook_time');
			$table->string('cook_time_type');
			$table->integer('ready_time')->nullable();
			$table->string('ready_time_type')->nullable();
			$table->string('servings')->nullable();

			$table->foreign('user_id')
					->references('id')
					->on('users')
					->onDelete('cascade');
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
