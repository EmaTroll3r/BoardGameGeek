<?php

namespace App\Models;
use App\Models\Media;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    public $timestamp = false;

    public function media(){
        return $this->belongsTo(Media::class);
    }
}