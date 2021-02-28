<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'uuid',
        'category_name',
        'slug',
    ];

    public function posts()
    {
    	return $this->hasMany('App\Models\Post');
    }
}
