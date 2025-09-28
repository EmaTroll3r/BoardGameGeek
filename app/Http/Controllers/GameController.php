<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Boardgame;
use App\Models\Media;
use App\Models\News;
use App\Models\BoardgameAlternativeName;
use App\Models\Award;
use App\Models\Video;
use App\Models\videoCategory;
use App\Models\Interaction;
use Session;

class GameController extends BaseController
{

    public function show_game($id){
        
        if(!Session::get('user_id')){
            return redirect('login');
        }
        
        return view('game')->with('gameId', $id);
    }

    public function get_game_data($id){

        $boardgame = Boardgame::find($id);

        $data['boardgame'] = $boardgame;

        $data['alternative_names'] = $boardgame->alternativeNames()->get();

        $data['designers'] = $boardgame->designers()->get();

        $data['artists'] = $boardgame->artists()->get();

        $data['publishers'] = $boardgame->publishers()->get();

        $data['awards'] = $boardgame->awards()->get();

        $data['tags'] = $boardgame->tags()->get();

        $data['images'] = $boardgame->images()->limit(10)->get();

        $data['images_count'] = $boardgame->images()->count();

        $data['hot_videos'] = $boardgame->hottestMedia('video',3)->get();

        $data['videos_count'] = $boardgame->videos()->count();

        $data['hot_forums'] = $boardgame->hottestMedia('forum',2)->get();

        $data['forums'] = $boardgame->hottestMedia('forum',5)->get();

        $data['forums_count'] = $boardgame->forums()->count();

        $data['related_boardgames'] = $boardgame->relatedBoardgames()->with('boardgameDetails')->limit(6)->get();

        $data['related_boardgames_count'] = $boardgame->relatedBoardgames()->count();

        $data['hot_files'] = $boardgame->hottestMedia('file',2)->get();

        $data['files'] = $boardgame->hottestMedia('file',5)->get();

        $data['files_count'] = $boardgame->files()->count();

        $data['news_count'] = $boardgame->news()->count();

        if(Session::get('user_id')){
            $data['interaction'] = $boardgame->userInteraction(Session::get('user_id'))->first();
        }

        return $data;
    }

    public function get_ebay_item($item,$maxResults=1){
        
        $client_id = env('EBAY_APP_ID');
        $client_secret = env('EBAY_CERT_ID');
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.ebay.com/identity/v1/oauth2/token');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials&scope=https://api.ebay.com/oauth/api_scope');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret)));
        $token = json_decode(curl_exec($ch), true);
        curl_close($ch);
        
        $query = urlencode($item);
        $url = 'https://api.sandbox.ebay.com/buy/browse/v1/item_summary/search?q=' . $query . '&limit='. $maxResults . '&sort=price';
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token['access_token']));
        $res = curl_exec($ch);
        curl_close($ch);
        
        $data = json_decode($res, true);
        
        return $data;
    }

    public function rate_boardgame($gameId, $rateValue){

        $rateValue = intval($rateValue);
        if($rateValue < 1 || $rateValue > 10){
            return "Error: rate value must be between 1 and 10";
        }

        $user_id = Session::get('user_id');
        if(!$user_id){
            return "Error: user not logged in";
        }

        $interaction = Interaction::where('user_id',$user_id)->where('boardgame_id',$gameId)->first();

        if(!$interaction){
            $interaction = new Interaction;
            $interaction->user_id = $user_id;
            $interaction->boardgame_id = $gameId;
            $interaction->rating = $rateValue;
            $interaction->save();

            return "OK";
        }else{
            $interaction->rating = $rateValue;
            $interaction->save();
            return "OK";
        }

        return "Error: generic error";
    }

    public function toggle_like_boardgame($gameId){

        $user_id = Session::get('user_id');
        if(!$user_id)
            return "Error: user not logged in";

        $interaction = Interaction::where('boardgame_id',$gameId)->where('user_id',$user_id)->first();

        if(!$interaction){
            $interaction = new Interaction;
            $interaction->user_id = $user_id;
            $interaction->boardgame_id = $gameId;
            $interaction->liked = true;
            $interaction->save();

            return "OK";
        }else{
            if($interaction->liked == true){
                $interaction->liked = false;
                $interaction->save();

                return "OK";
            }else{
                $interaction->liked = true;
                $interaction->save();

                return "OK";
            }
        }

        return "Error: generic error";
    }

    public function test($id){

        $b = Boardgame::with('interactions')->find(1);
        return $b->userInteraction(1)->get();
    }
}