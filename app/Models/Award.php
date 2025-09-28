<?php

namespace App\Models;
use App\Models\AwardedBoardgame;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $table = 'awards';
    public $timestamps = false;

    public function boardgames(){
        return $this->hasMany(AwardedBoardgame::class)->with('boardgame');
    }

    public function awardedBoardgames(){
        return $this->hasMany(AwardedBoardgame::class);
    }
}