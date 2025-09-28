<?php

namespace App\Models;
use App\Models\Media;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';
    public $timestamp = false;

    public function media(){
        return $this->belongsTo(Media::class);
    }
}