<?php

namespace App\Models;
use App\Models\Boardgame;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
    protected $table = 'user_boardgame_interaction';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function boardgame(){
        return $this->belongsTo(Boardgame::class);
    }

}
