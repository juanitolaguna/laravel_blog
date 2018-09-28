<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // $comment->post;

    protected $fillable = ['post_id', 'body'];

    public function post() {
    	return $this->belongsTo(Post::class);
    }

    //$comment->user->name;
    public function user() {
    	return $this->belongsTo(User::class);
    }
}
