<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	protected $fillable = [
		'location', 'bio',
		'twitter_username', 'instagram_username'
	];

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}