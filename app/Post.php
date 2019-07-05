<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /*protected $fillable = [
        'content',
    ];*/

    public function user()
    {
        return $this->belongsTo('App/User','id', 'user_id');
    }
    public function comments()
    {
        return $this->hasMany('App/Comment', 'post_id', 'id');
    }

}
