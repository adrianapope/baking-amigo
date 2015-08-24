<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	protected $fillable = [
		'recipe_id',
		'user_id',
		'review_id',
		'body'
	];

	/**
	* A comment belongs to one recipe.
	*
	* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	*/
	public function recipe()
	{
		return $this->belongsTo('App\Recipe');
	}

	/**
	* A comment can be tied to one review.
	*
	* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	*/
	public function review()
	{
		return $this->hasOne('App\Review');
	}

}
