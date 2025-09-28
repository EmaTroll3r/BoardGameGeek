<?php

namespace App\Models;
use App\Models\Country;
use App\Models\Boardgame;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function hadDesigned(){
        return belongsToMany(
            Boardgame::class,
            'boardgame_person_designer',
            'person_id',
            'boardgame_id'
        );
    }

    public function artists(){
        return belongsToMany(
            Boardgame::class,
            'boardgame_person_artist',
            'person_id',
            'boardgame_id'
        );
    }

    public function hadPublished(){
        return belongsToMany(
            Boardgame::class,
            'boardgame_person_publisher',
            'person_id',
            'boardgame_id'
        );
    }
}
