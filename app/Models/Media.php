<?php

namespace App\Models;
use App\Models\Boardgame;
use App\Models\User;
use App\Models\Language;
use App\Models\Comment;
use App\Models\Like;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';

    public function boardgame(){
        return $this->belongsTo(Boardgame::class);
    }

    public function uploader(){
        return $this->belongsTo(User::class,'uploader_user_id');
    }

    public function language(){
        return $this->belongsTo(Language::class);
    }

    public function category(){
        return $this->belongsTo(MediaCategory::class,'category_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

}