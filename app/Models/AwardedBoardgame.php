<?php

namespace App\Models;
use App\Models\Award;
use App\Models\Boardgame;

use Illuminate\Database\Eloquent\Model;

class AwardedBoardgame extends Model
{
    protected $table = 'award_boardgame';
    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;

    public function boardgame(){
        return $this->belongsTo(Boardgame::class);
    }

    public function award(){
        return $this->belongsTo(Award::class);
    }


}