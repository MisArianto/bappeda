<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'uuid',
    	'user_id',
        'category_id',
        'judul',
        'image',
        'content',
        'tag',
        'slug',
        'eye'
    ];

    public function category()
    {
    	return $this->belongsTo('App\Models\Master\Category', 'category_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    // public function tags()
    // {
    //     return $this->belongsToMany('App\Models\Master\Tag', 'tag_id');
    // }
}
