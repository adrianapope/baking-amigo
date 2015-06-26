<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model {

	protected $fillable = [
		'name',
		'recipe_id',
		'user_id'
	];

	/**
	* An ingredient is owned by a recipe.
	*
	* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	*/
	public function recipe()
	{
		return $this->belongsTo('App\Recipe');
	}

}
