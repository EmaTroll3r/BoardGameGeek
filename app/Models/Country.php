<?php

namespace App\Models;
use App\Models\Person;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    public $timestamps = false;

    public function people(){
        return $this->hasMany(Person::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

}
