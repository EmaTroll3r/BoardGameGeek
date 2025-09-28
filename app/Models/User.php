<?php

namespace App\Models;
use App\Models\Country;
use App\Models\Microbadge;
use App\Models\Media;
use App\Models\Boardgame;
use App\Models\Like;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public function country(){
        return $this->belongsTo(Country::class);
    }
    
    public function microbadges(){
        return $this->belongsToMany(
            Microbadge::class,
            'user_microbadge',
            'user_id',
            'microbadge_id'
        );
    }

    public function uploadedMedia(){
        return $this->hasMany(Media::class, 'uploader_user_id');
    }

    public function interactions(){
        return $this->hasMany(Interaction::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

}
