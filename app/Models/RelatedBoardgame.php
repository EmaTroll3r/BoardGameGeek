<?php

namespace App\Models;
use App\Models\Boardgame;

use Illuminate\Database\Eloquent\Model;

class RelatedBoardgame extends Model
{
    protected $table = 'related_boardgames';
    public $timestamps = false;

    public function boardgameDetails(){             //related_boardgame_id
        return $this->belongsTo(Boardgame::class, 'related_boardgame_id');
    }
}