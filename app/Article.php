<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

	protected $table = "articles";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [

		'user_id','title','slug','excerpts','body',
	];

	public function user(){
		return $this->belongsTo('App\User');
	}

}