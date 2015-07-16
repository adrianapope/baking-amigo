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
		'published_at',
	];

	protected $dates = ['published_at'];

	/**
	* A recipe can have many ingredients.
	*
	* @return \Iluminate\Database\Eloquent\Relations\HasMany
	*/
	public function ingredients()
	{
		return $this->hasMany('App\Ingredient');
	}

	/**
	* A recipe is owned by a user.
	*
	* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	*/
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	// convention is scopeName
	// and that will accept our query builder
	public function scopePublished($query) 
	{
 		$query->where('published_at', '<=', Carbon::now())->get();
	}

	/**
	* Set the published_at attribute (this is a setter)
	*
	* @ param $date
	*/
	public function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::parse($date);
	}

	/**
	* Get the published_at attribute. Ensures we have an instance of Carbon.
	*
	* @param $date
	* @ return string
	*/
	public function getPublishedAtAttribute($date)
	{
		return Carbon::parse($date)->format('Y-m-d');
	}

    /**
     * Get the tags associated with the given recipe.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
    * Get the tags associated with the given recipe.
    * @return array
    */
    public function getTagListAttribute()
    {
    	return $this->tags->lists('id');
    }

}

