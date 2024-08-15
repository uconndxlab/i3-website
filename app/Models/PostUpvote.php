<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostUpvote extends Model
{
    protected $table = 'post_upvotes';

    protected $guarded = [];

    public function post() {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    public function user() {
        return $this->belongsTo(SamlUser::class, 'user_id', 'id');
    }
}
