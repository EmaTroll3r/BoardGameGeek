<?php

namespace App\Models;
use App\Models\Forum;

use Illuminate\Database\Eloquent\Model;

class ForumCategory extends Model
{
    protected $table = 'forum_categories';
    public $timestamps = false;

    public function forum(){
        return $this->hasMany(Forum::class);
    }
}