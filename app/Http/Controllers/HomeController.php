<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Boardgame;
use App\Models\Media;
use App\Models\News;
use Session;

class HomeController extends BaseController
{

    public function show_home(){
        
        if(!Session::get('user_id')){
            return redirect('login');
        }

        return view('home');
    }

    public function get_session_username(){
        $user = User::find(Session::get('user_id'));
        if($user)
            return $user->username;
        else
            return null;
    }    
    
    public function get_hot_games($maxResults = 8){
        return Boardgame::where('is_base_game',TRUE)->orderByDesc('bgg_ELO')->take($maxResults)->get();
    }

    public function list_boardgames(){

        $data['topNews'] = Media::with('uploader:id,username')
                                    ->with('boardgame:id,image_url,name,thumbnail_url')
                                    ->where('media_type', 'forum')
                                    ->orderByDesc('n_likes')
                                    ->take(5)
                                    ->get();      

                                    
        $data['boardGames'] = Boardgame::where('is_base_game',TRUE)
                                        ->orderByDesc('bgg_ELO')
                                        ->take(5)
                                        ->get();

        $data['crowdfunding'] = Boardgame::where('is_base_game',TRUE)
                                        ->orderBy('complexity_rating')
                                        ->take(5)
                                        ->get();
                                        
        $data['crowdfunding'] = $this->create_new_column($data['crowdfunding'],'expires',["30 March","2 April","5 April","8 April"]);
        $data['crowdfunding'] = $this->create_new_column($data['crowdfunding'],'external_link',["https://external_link"]);

        $data['videos'] = $this->get_youtube_videos('boardgames',5);
        
        $data['bestseller'] = Boardgame::where('is_base_game',TRUE)
                                        ->orderByDesc('owners')
                                        ->take(5)
                                        ->get();

        $data['boardGameNews'] = Media::with('uploader:id,username')
                                        ->where('media_type', 'news')
                                        ->with('boardgame')
                                        ->orderByDesc('n_likes')
                                        ->take(5)
                                        ->get();

        $data['hotDiscussion'] = Media::with('uploader:id,username')
                                        ->where('media_type', 'forum')
                                        ->with('boardgame')
                                        ->orderByDesc('n_likes')
                                        ->take(5)
                                        ->get();      
                                        
        
        $data['giveway'] = Boardgame::select('id', 'thumbnail_url', 'name')
                                        ->with('publishers')
                                        ->where('is_base_game',TRUE)
                                        ->orderByDesc('complexity_rating')
                                        ->take(5)
                                        ->get();
                                        
        $data['giveway'] = $this->create_new_column($data['giveway'],'expires',["30 March","2 April","5 April","8 April"]);

        $data['mostPlayed'] = Boardgame::where('is_base_game',TRUE)
                                        ->orderByDesc('num_ratings')
                                        ->take(5)
                                        ->get();

        $data['geeklist'] = Boardgame::where('is_base_game',TRUE)
                                        ->orderByDesc('average_rating')
                                        ->take(5)
                                        ->get();     

        $data['blogs'] = Media::with('uploader:id,username')
                                        ->where('media_type', 'video')
                                        ->with('boardgame')
                                        ->orderByDesc('n_likes')
                                        ->take(5)
                                        ->get();   

        $data['forums'] = Media::with('uploader:id,username')
                                        ->where('media_type', 'forum')
                                        ->with('boardgame')
                                        ->orderByDesc('n_comments')
                                        ->take(5)
                                        ->get();

        $data['books'] = $this->get_openlibrary_books('boardgames',5);

        return json_encode($data);
    }


    protected function create_new_column($data, $column_name, $invented_data) {
        for($i = 0; $i < count($data); $i++){
            $data[$i][$column_name] = $invented_data[$i % count($invented_data)];
        }
        return $data;
    }

    public function get_youtube_videos($title, $maxResults){
        $apiKey = env('YOUTUBE_API_KEY');
        $query = $title;
        
        $url = "https://www.googleapis.com/youtube/v3/search?" . http_build_query([
            'key' => $apiKey,
            'q' => $query,
            'part' => 'snippet',
            'order' => 'relevance',
            'maxResults' => $maxResults,
            'type' => 'video',
            'videoDuration' => 'medium'
        ]);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($httpCode === 200) {
            $data = json_decode($response, true);
            
            if (isset($data['items'])) {
                $videos = [];
                for($i=0; $i<count($data['items']); $i++) {
                    $item = $data['items'][$i];
                    $video['id'] = $item['id']['videoId'];
                    $video['name'] = $item['snippet']['title'];
                    $video['description'] = substr($item['snippet']['description'], 0, 50) . '...';
                    $video['thumbnail_url'] = $item['snippet']['thumbnails']['medium']['url'];
                    $video['alt'] = $item['snippet']['title'];
                    $video['info'] = $item['snippet']['publishedAt'];
                    $video['href'] = 'https://www.youtube.com/watch?v=' . $item['id']['videoId'];
                    $videos[$i] = $video;
                }
                return $videos;
            }
        }
        
        $error['error'] = 'Failed to fetch videos '. $httpCode;
        return $error;
    }

    public function get_openlibrary_books($title, $maxResults) {
        $url = "https://openlibrary.org/search.json?" . http_build_query([
            'q' => $title,
            'limit' => $maxResults
        ]);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode === 200) {
            $data = json_decode($response, true);
            if (!empty($data['docs'])) {
                $books = [];
                for($i=0; $i<count($data['docs']); $i++) {
                    $item = $data['docs'][$i];
                    $book['name'] = $item['title'];
                    $book['info'] = $item['first_publish_year'];
                    $book['thumbnail_url'] = isset($item['cover_i']) ? "https://covers.openlibrary.org/b/id/{$item['cover_i']}-M.jpg" : 'https://peoplesblog.co.in/sri-vedanta-swarajya-sangam/assets/img/books/default.jpeg';
                    $books[$i] = $book;
                }
                return $books;
            }
        }

        $error['error'] = 'Failed to fetch videos '. $httpCode;
        return $error;
    }

    public function hometest($id){
        return view('home-original');
    }
}