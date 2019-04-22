<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $guarded = ['id'];
	
    // This Menu has Many pages
    public function	pages()
	{
		return	$this->hasMany('App\Page',	'menu_id');
	}
}
