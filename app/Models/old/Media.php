<?php

namespace App\Models;
use App\Models\Forum;
use App\Models\Video;
use App\Models\File;
use App\Models\Image;
use App\Models\News;
use App\Models\Boardgame;
use App\Models\User;
use App\Models\Language;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';

    public function forum(){
        return $this->hasOne(Forum::class);
    }

    public function video(){
        return $this->hasOne(Video::class);
    }

    public function file(){
        return $this->hasOne(File::class);
    }

    public function news(){
        return $this->hasOne(News::class);
    }

    public function image(){
        return $this->hasOne(Image::class);
    }


    public function getSpecificType(){
        if($this->forum) return $this->forum;
        if($this->video) return $this->video;
        if($this->file) return $this->file;
        if($this->news) return $this->news;
        if($this->image) return $this->image;
        return null;
    }

    public function boardgame(){
        return $this->belongsTo(Boardgame::class);
    }

    public function uploader(){
        return $this->belongsTo(User::class,'uploader_user_id');
    }

    public function language(){
        return $this->belongsTo(Language::class);
    }
    

    public function videoReviews(){
        return $this->video()->where('video_category_id',2);
    }
    
}