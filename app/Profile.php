<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}