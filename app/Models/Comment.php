<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Media;

class Comment extends Model
{
    protected $table = 'comments';

    public function uploader(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function media(){
        return $this->belongsTo(Media::class);
    }
}