<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Boardgame;
use Session;

class SearchController extends BaseController
{
    public function show_page($q,$orderBy="default",$orderDir="asc"){
        
        if(!Session::get('user_id')){
            return redirect('login');
        }

        return view('search')->with('q',$q)->with('orderBy', $orderBy)->with('orderDir', $orderDir);
    }

    public function search_boardgames($q,$orderBy="default",$orderDir="asc"){

        
        $user_id = Session::get('user_id');
        if(!$user_id){
            return "Error: user is not logged in";
        }

        if($orderBy == 'default'){
            $data['start_with'] = Boardgame::with('currentUserInteraction')
                            ->where('is_base_game',TRUE)
                            ->where('name', 'like', $q . "%")
                            ->get();


            $data['contains'] = Boardgame::with('currentUserInteraction')
                            ->where('is_base_game',TRUE)
                            ->where('name', 'like',"%" . $q . "%")
                            ->where('name', 'not like', $q . '%')
                            ->get();

        }else{
            $data = Boardgame::with('currentUserInteraction')
                            ->where('is_base_game',TRUE)
                            ->where('name', 'like',"%" . $q . "%")
                            ->orderBy($orderBy, $orderDir)
                            ->get();
        }

        return $data;
    }
    
}