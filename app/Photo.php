<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $table = 'recipe_photos';


	protected $fillable = ['path'];

	/**
	*
	* A photo belongs to a recipe.
	*
	* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	*/
	public function recipe()
	{
		return $this->belongsTo('App\Recipe');
	}

}



// $photo->recipe