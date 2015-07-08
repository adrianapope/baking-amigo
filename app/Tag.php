<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {
    /**
     * Get the recipes associated with the given tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function recipes()
    {
        return $this->belongsToMany('App\Recipe');
    }
}
