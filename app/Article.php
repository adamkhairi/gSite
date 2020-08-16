<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'title', 'body', 'img', 'user_id', 'category_id'
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');

    }

    public function user()
    {
        return $this->beLongsTo('App\User');

    }

}
