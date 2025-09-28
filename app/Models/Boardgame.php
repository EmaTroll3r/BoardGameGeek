<?php

namespace App\Models;
use App\Models\BoardgameAlternativeName;
use App\Models\Tag;
use App\Models\Media;
use App\Models\RelatedBoardgame;
use App\Models\Person;
use Session;

use Illuminate\Database\Eloquent\Model;

class Boardgame extends Model
{

    protected $table = 'boardgames';

    public function alternativeNames(){
        return $this->hasMany(BoardgameAlternativeName::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function designers(){
        return $this->belongsToMany(
            Person::class,
            'boardgame_person_designer',
            'boardgame_id',
            'person_id'
        );
    }

    public function artists(){
        return $this->belongsToMany(
            Person::class,
            'boardgame_person_artist',
            'boardgame_id',
            'person_id'
        );
    }

    
    public function publishers(){
        return $this->belongsToMany(
            Person::class,
            'boardgame_person_publisher',
            'boardgame_id',
            'person_id'
        );
    }

    public function media(){
        return $this->hasMany(Media::class);
    }

    public function images(){
        return $this->hasMany(Media::class)->where('media_type','image');
    }

    public function files(){
        return $this->hasMany(Media::class)->where('media_type','file');
    }

    public function forums(){
        return $this->hasMany(Media::class)->where('media_type','forum');
    }

    public function videos(){
        return $this->hasMany(Media::class)->where('media_type','video');
    }

    public function news(){
        return $this->hasMany(Media::class)->where('media_type','news');
    }

    public function completeMediaInformations($media_type){
        return $this->media()
                    ->where('media_type',$media_type)
                    ->with('category')
                    ->with('uploader:id,username,avatar_url,n_published_media')
                    ->with('language');
    }

    public function hottestMedia($media_type, $maxResults){
        return $this->completeMediaInformations($media_type)->orderByDesc('n_likes')->limit($maxResults);
    }

    public function hotFiles(){
        return $this->completeMediaInformations('file')
                    ->orderByDesc('n_likes')
                    ->limit(2);
    }

    public function topFiles(){
        return $this->completeMediaInformations('file')
                    ->orderByDesc('n_likes')
                    ->limit(5);
    }

    public function awards(){
        return $this->hasMany(AwardedBoardgame::class)->with('award');
    }

    public function awardedBoardgames(){
        return $this->hasMany(AwardedBoardgame::class);
    }

    public function relatedBoardgames(){
        return $this->hasMany(RelatedBoardgame::class,'main_boardgame_id');
    }

    public function interactions(){
        return $this->hasMany(Interaction::class);
    }

    public function userInteraction($user_id){
        return $this->interactions()->where('user_id',$user_id);
    }

    public function currentUserInteraction(){
        return $this->interactions()->where('user_id',Session::get('user_id'));
    }
}