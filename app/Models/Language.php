<?php

namespace App\Models;
use App\Models\Media;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';
    public $timestamps = false;

    public function media(){
        return $this->hasMany(Media::class);
    }
}
