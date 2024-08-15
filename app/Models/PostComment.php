<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $table = 'post_comments';

    protected $guarded = [];

    public function post() {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    public function author() {
        return $this->belongsTo(SamlUser::class, 'user_id', 'id');
    }
}
