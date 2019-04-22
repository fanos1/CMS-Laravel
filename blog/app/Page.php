<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // in the MODEL, tell about relationships

	protected $guarded = ['id'];

    public	function user() {
		// PAGEs belong to users (user1, or user2 etc..)
		return	$this->belongsTo('App\User');
	}
   

	public	function menu() {
		// PAGEs belong to users (menu1, or user2 etc..)
		return	$this->belongsTo('App\Menu');
	}

	public function articles()
	{
		// This page CONTAINS many articles
		return	$this->belongsToMany('App\Article')->withTimestamps();
	}

 	public	function getTitle() {
		return	$this->title;
	}

}
