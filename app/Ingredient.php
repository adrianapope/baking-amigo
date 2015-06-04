<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model {

	protected $fillable = [
		'name',
		'recipe_id',
		'user_id'
	];

	public function recipe()
	{
		return $this->belongsTo('App\Recipe');
	}

}
