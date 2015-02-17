<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	/**
	 * Get the articles associated with tie given tag.
	 *
	 * @return \Illuminate\Datebase\Eloquent\Relations\BelongsToMany
	 */
	public function articles()
	{
		return $this->belongsToMany('App\Article');
	}

}
