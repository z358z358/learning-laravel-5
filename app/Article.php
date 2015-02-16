<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	/**
	 * fillable fields for an Article.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title',
		'body',
		'published_at'
	];

	/**
	 * Additional fields to treat as Carbon instances.
	 *
	 * @var array
	 */
	protected $dates = ['published_at'];

	/**
	 * Scope queries to articles thas have been published.
	 *
	 * @param  $query
	 */
	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now());
	}

	/**
	 * Scope queries to articles that have been published.
	 *
	 * @param  $query
	 */
	public function scopeUnpublished($query)
	{
		$query->where('published_at', '>', Carbon::now());
	}

	/**
	 * Set the published_at arttribute.
	 *
	 * @param $date
	 */
	public function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::parse($date);

	}

	/**
	 * An article is owned by a user.
	 *
	 * @return\Illuminate\Datebase\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
