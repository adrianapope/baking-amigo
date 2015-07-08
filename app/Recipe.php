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
		'user_id' // temporary!!!
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

    /**
     * Get the tags associated with the given recipe.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    // if we say tag_list or tagList it would trigger this method
    // get an array of the ids of the tags associated with this recipe.
    // we will switch the form to say tag_list instead of 'tags'
    
    /**
    * Get the tags associated with the given recipe.
    * @return array
    */
    public function getTagListAttribute()
    {
    	return $this->tags->lists('id');
    }

}

