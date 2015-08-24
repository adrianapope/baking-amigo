<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {

	protected $fillable = [
		'recipe_id',
		'user_id',
		'comment_id',
		'rating',
	];

	/**
	* A review belongs to one recipe.
	*
	* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	*/
	public function recipe()
	{
		return $this->belongsTo('App\Recipe');
	}

	/**
	* A review belongs to one comment.
	*
	* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	*/
	public function comment()
	{
		return $this->belongsTo('App\Comment');
	}

}
