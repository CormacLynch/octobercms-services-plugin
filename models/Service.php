<?php namespace GetRight\Services\Models;

use Model;
use Cms\Classes\Page;

/**
 * Service Model
 * @package GetRight\Services\Models
 */
class Service extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'getright_services_services';

    /**
     * Rules for the model.
     *
     * @var array $rules
     */
    public $rules = [
        'title' => 'required|string',
        'text' => 'required|string'
    ];

		/**
		 * Get a list of all pages. Prepend an empty option to the start
		 *
		 * @return array
		 */
		public function getUrlOptions()
		{
			$allPages = Page::sortBy('baseFileName')->lists('title', 'baseFileName');
			$pages = array('');

			foreach ($allPages as $key => $value) {
					$pages[$key] = "{$value} - (File: $key)";
			}

			return $pages;
		}

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'title',
        'text'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
