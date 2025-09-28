<?php

namespace App\Models;
use App\Models\Video;

use Illuminate\Database\Eloquent\Model;

class VideoCategory extends Model
{
    protected $table = 'video_categories';
    public $timestamps = false;

    
    public function video(){
        return $this->hasMany(Video::class);
    }


    public function videoReviews(){
        return $this->where('name','Reviews');
    }
}