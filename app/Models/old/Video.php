<?php

namespace App\Models;
use App\Models\Media;
use App\Models\VideoCategory;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    public $timestamp = false;

    public function media(){
        return $this->belongsTo(Media::class);
    }

    public function VideoCategory(){
        return $this->belongsTo(VideoCategory::class,
            'video_category_id'
        );
    }

    public function VideoReviews(){
        return $this->VideoCategory();
    }
}