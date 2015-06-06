<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Recipe extends Model {

	protected $fillable = [
		'name',
		'description',
		'notes',
		'instructions',
		'prep_time',
		'prep_time_type',
		'cook_time',
		'cook_time_type',
		'ready_time',
		'ready_time_type',
		'servings',
		'published_at'
	];

	protected $dates = ['published_at'];

	public function ingredients()
	{
		return $this->hasMany('App\Ingredient');
	}

	// convention is scopeName
	// and that will accept our query builder
	public function scopePublished($query) 
	{
 		$query->where('published_at', '<=', Carbon::now())->get();
	}
	// setNameAttribute
	// convert underscore to camelcase
	// correct form, use carbon format year month date
	// and we will pass the string date as the second argument
	// the time will be added as well if that makes sense for your project
	// format is $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
	// if you want to set it in the future and publish at midnight do Carbon::parse($date);
	public function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::parse($date);
	}
}
