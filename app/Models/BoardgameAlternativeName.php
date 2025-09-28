<?php

namespace App\Models;
use App\Models\Boardgame;

use Illuminate\Database\Eloquent\Model;

class BoardgameAlternativeName extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = null;
    protected $table = 'boardgame_alternative_names';

    public function boardgame(){
        return $this->belongsTo(Boardgame::class);
    }
}