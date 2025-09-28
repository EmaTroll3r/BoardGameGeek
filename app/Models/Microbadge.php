<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Microbadge extends Model
{
    protected $table = 'microbadges';
    public $timestamps = false;

    public function users(){
        return $this->belongsToMany(
            User::class,
            'user_microbadge',
            'microbadge_id',
            'user_id'
        );
    }
}
