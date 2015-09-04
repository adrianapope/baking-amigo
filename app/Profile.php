<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	protected $fillable = [
		'location', 'bio',
		'twitter_username', 'instagram_username'
	];

	/**
	*
	* A profile belongs to a user.
	*
	* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	*/
	public function user()
	{
		return $this->belongsTo('App\User');
	}
}