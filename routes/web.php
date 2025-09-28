<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\MediaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [LoginController::class, 'register_form']);
Route::post('register', [LoginController::class, 'do_register']);

Route::get('logout', [LoginController::class, 'do_logout']);

Route::get('login', [LoginController::class, 'login_form']);
Route::post('login', [LoginController::class, 'do_login']);
Route::get('register/checkMail/{email}', [LoginController::class, 'check_mail']);
Route::get('register/checkUsername/{username}', [LoginController::class, 'check_username']);

Route::get('home',[HomeController::class, 'show_home']);

Route::get('getSessionUsername',[HomeController::class, 'get_session_username']);
Route::get('home/listBoardgames',[HomeController::class, 'list_boardgames']);
Route::get('getHotGames/{maxResults?}',[HomeController::class, 'get_hot_games']);

Route::get('game/{id}',[GameController::class, 'show_game']);
Route::get('getGameData/{id}',[GameController::class, 'get_game_data']);
Route::get('getEbayItem/{item}/{maxResults?}',[GameController::class, 'get_ebay_item']);
Route::get('rateBoardgame/{id}/{rateValue}',[GameController::class, 'rate_boardgame']);
Route::get('toggleLikeBoardgame/{id}',[GameController::class, 'toggle_like_boardgame']);


Route::get('search/{q}/{orderBy?}/{orderDirection?}',[SearchController::class, 'show_page']);
Route::get('searchBoardgames/{q}/{orderBy?}/{orderDirection?}',[SearchController::class, 'search_boardgames']);

Route::get('media/{media_id}',[MediaController::class, 'show_page']);
Route::get('getMediaData/{media_id}',[MediaController::class, 'get_media_data']);
Route::get('toggleLikeMedia/{media_id}',[MediaController::class, 'toggle_like_boardgame']);
Route::post('postComment',[MediaController::class, 'post_Comment']);
Route::get('deleteComment/{comment_id}',[MediaController::class, 'delete_comment']);


Route::get('test/{id}',[GameController::class, 'test']);
Route::get('hometest/{id}',[HomeController::class, 'hometest']);
Route::get('getDb',[GameController::class, 'get_db']);

