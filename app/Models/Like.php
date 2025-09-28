<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Media;

class Like extends Model
{
    protected $table = 'likes';

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function media(){
        return $this->belongsTo(Media::class);
    }
}