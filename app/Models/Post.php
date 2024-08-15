<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    protected $table = 'posts';

    protected $guarded = [];

    public function author() {
        return $this->belongsTo(SamlUser::class, 'user_id', 'id');
    }

    public function votes() {
        return $this->hasMany(PostUpvote::class, 'post_id', 'id');
    }

    public function comments() {
        return $this->hasMany(PostComment::class, 'post_id', 'id');
    }

    /**
     * Scopes
     */
    public function scopePopular(Builder $query) {
        return $query->withCount('votes')->orderBy('votes_count', 'desc');
    }

}
