<?php

namespace App\Models;
use App\Models\Media;

use Illuminate\Database\Eloquent\Model;

class MediaCategory extends Model
{
    protected $table = 'media_categories';
    public $timestamps = false;

    public function media(){
        return $this->hasMany(Media::class);
    }
}