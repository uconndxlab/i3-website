<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class SamlUser extends Model implements Authenticatable
{
    protected $table = 'saml_users';

    protected $guarded = [];
    
    public static function by_netid($netid) {
        return self::where('netid', $netid)->first();
    }

    /**
     * Required for Authenticatable
     */
    public function getAuthIdentifierName() {
        return 'netid';
    }

    public function getAuthIdentifier() {
        return $this->netid;
    }

    public function getAuthPassword() {
        return null;
    }

    public function getAuthPasswordName() {
        return null;
    }

    public function getRememberToken() {
        return null;
    }

    public function setRememberToken($value) {
        return null;
    }

    public function getRememberTokenName() {
        return null;
    }


    /**
     * Relationships
     */
    public function posts() {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    public function comments() {
        return $this->hasMany(PostComment::class, 'user_id', 'id');
    }

    public function votes() {
        return $this->hasMany(PostUpvote::class, 'user_id', 'id');
    }
}
