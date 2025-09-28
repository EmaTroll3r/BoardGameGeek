<?php

namespace App\Models;
use App\Models\Media;
use App\Models\ForumCategory;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forums';
    public $timestamp = false;

    public function media(){
        return $this->belongsTo(Media::class);
    }

    public function forumCategory(){
        return $this->belongsTo(ForumCategory::class);
    }
}