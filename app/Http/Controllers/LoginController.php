<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Session;

class LoginController extends BaseController
{
    public function register_form(){

        if(Session::get('user_id')){
            return redirect('home');
        }

        $err = Session::get('error');
        Session::forget('error');
        return view('register')->with('error',$err);
    }

    
    public function check_mail($email)
    {
        $user = User::where("email",$email)->first();
        if($user)
            return json_encode(['exists' => true]);
        else
            return json_encode(['exists' => false]);

    }
    
    public function check_username($username)
    {
        $user = User::where("username",$username)->first();
        if($user)
            return json_encode(['exists' => true]);
        else
            return json_encode(['exists' => false]);

    }

    public function do_register(){

        $username = request('username');
        $password = request('password');
        $email = request('email');

        if(strlen($username) == 0 || strlen($password) == 0 || strlen($email) == 0){
            Session::put('error','empty_fields');
            return redirect('register')->withInput();
        }
        else if(User::where('username', $username)->first()){
            Session::put('error','username_already_used');
            return redirect('register')->withInput();
        }
        else if(User::where('email', $email)->first()){
            Session::put('error','email_already_used');
            return redirect('register')->withInput();
        }

        $user = new User;
        $user->username = $username;
        $user->email = $email;
        $user->avatar_url = "https://toppng.com/uploads/preview/avatar-png-11554021661asazhxmdnu.png";
        $user->password = password_hash($password, PASSWORD_BCRYPT);
        $user->save();

        Session::put('user_id',$user->id);

        return redirect('home');
    }

    public function do_logout(){
        Session::flush();
        return redirect('login');
    }

    public function login_form(){

        if(Session::get('user_id')){
            return redirect('home');
        }

        $err = Session::get('error');
        Session::forget('error');
        return view('login')->with('error',$err);
    }

    public function do_login(){

        $username = request('username');
        $password = request('password');

        if(strlen($username) == 0 || strlen($password) == 0){
            Session::put('error','empty_fields');
            return redirect('login')->withInput();
        }

        $user = User::where('username',$username)->first();

        if(!$user){
            Session::put('error','user_not_found');
            return redirect('login')->withInput();
        }else if(!password_verify($password, $user->password)){
            Session::put('error','incorrect_password');
            return redirect('login')->withInput();
        }

        Session::put('user_id', $user->id);
        return redirect('home');
    }
}
