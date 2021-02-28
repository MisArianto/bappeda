<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
    	'uuid',
    	'tag_name',
    	'slug'
    ];

    // public function post()
    // {
    // 	return $this->hasOne('App\Models\Post');
    // }
}
