<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model {

	protected $fillable = [
		'title',
		'description',
		'excerpt',
		'published_at'
	];

	public function ingredients()
	{
		return $this->hasMany('App\Ingredient');
	}

}
