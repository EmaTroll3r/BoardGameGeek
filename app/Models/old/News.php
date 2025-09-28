<?php

namespace App\Models;
use App\Models\Media;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function media(){
        return $this->belongsTo(Media::class);
    }
}