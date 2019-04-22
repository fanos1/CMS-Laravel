<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded =['id'];

	public	function pages()
	{
		// This Article belongs to Many pages
		return	$this->belongsToMany('App\Page')->withTimestamps();
	}
}
