<?php

namespace App\Models;
use App\Models\Boardgame;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    public $timestamps = false;

    public function boardgames(){
        return $this->belongsToMany(Boardgame::class);
    }
}