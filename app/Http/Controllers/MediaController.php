<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Media;
use App\Models\Like;
use App\Models\Comment;
use Session;

class MediaController extends BaseController
{
    public function show_page($media_id){

        $user_id = Session::get("user_id");

        if(!$user_id){
            return redirect("login");
        }

        return view('media')->with('media_id',$media_id)->with('user_id',$user_id);
    }
    
    public function get_media_data($media_id){

        $user_id = Session::get('user_id');
        if(!$user_id)
            return "Error: user not logged in";

        $media = Media::with('uploader:id,username,avatar_url')->withCount('comments')->find($media_id);

        $data['media'] = $media;

        $data['comments'] = $media->comments()->with('uploader:id,username,avatar_url')->get();

        $data['currentUserLike'] = $media->likes()->where('user_id',$user_id)->first();

        $data['boardgame'] = $media->boardgame()->first();

        return $data;
    }

    public function toggle_like_boardgame($media_id){

        $user_id = Session::get('user_id');
        if(!$user_id)
            return "Error: user not logged in";

        $like = Like::where('user_id',$user_id)->where('media_id',$media_id)->first();

        if($like){
            $like->delete();
        }else{
            $like = new Like;
            $like->user_id = $user_id;
            $like->media_id = $media_id;
            $like->save();
        }

        return "OK";
    }

    public function post_comment(){

        $textComment = request('comment');
        $media_id = request('media_id');

        $user_id = Session::get('user_id');
        if(!$user_id){
            $data['status'] = "Error: user not logged in";
            return $data;
        }

        $comment = new Comment;
        $comment->media_id = $media_id;
        $comment->user_id = $user_id;
        $comment->text_comment = $textComment;
        $comment->save();

        $data['status'] = "OK";
        $data['newComment'] = Comment::with('uploader:id,username,avatar_url')
                                    ->find($comment->id);
        return $data;
    }

    public function delete_comment($comment_id){
        
        $user_id = Session::get('user_id');
        if(!$user_id){
            $data['status'] = "Error: user not logged in";
            return $data;
        }

        $comment = Comment::with('uploader')->find($comment_id);

        if(!$comment){
            $data['status'] = "Error: comment with id " + $comment_id + " does not exists";
            return $data;
        }

        if($comment->uploader->id != $user_id){
            $data['status'] = "Error: You can't delete comments you didn't post";
            return $data;
        }

        $comment->delete();
        
        $data['status'] = "OK";
        $data['comment_id'] = $comment_id;

        return $data;


    }

}