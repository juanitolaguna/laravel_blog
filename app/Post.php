<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
// extends our own Model

class Post extends Model
{
    // protected $fillable = ['title', 'body']; //allowed

    // protected $guarded = ['user_id']; // not allowed - everything except user id;


    public function comments() {

    	return $this->hasMany(Comment::class);
    }

    public function user() { //$post->user

    	return $this->belongsTo(User::class);
    }


}
