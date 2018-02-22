<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class WebController extends Controller
{
    public function showAdminLogin(Request $req){
        return view('adminlogin');
    }
    public function doAdminLogin(Request $req){
        if(Auth::attempt(['username'=> $req->username,'password'=> $req->password, 'usertype' => 1, 'deleted' => 0])){
            return redirect('/Admin/Home');
        } else {
            return redirect('/AdminLogin');
        }
    }

    public function homepage(){
        $carousel = DB::table('article')->where('deleted',0)->orderByRaw("RAND()")->take(3)->get();
        $article = DB::table('article')->orderby('publish_datetime','DESC')->where('deleted',0)->get();
    	return view('homepage',compact('article','carousel'));
    }

    public function showSignin(){
    	return view('signin');
    }
    public function login(Request $req){
        if(Auth::attempt(['username'=> $req->username,'password'=> $req->password, 'usertype' => 0, 'deleted' => 0])){
        	return redirect('/');
        } else {
        	return redirect('/Signin');
        }
    }
    public function logout(Request $request) {
	  Auth::logout();
	  return redirect('/Signin');
	}

    public function showSignup(){
    	return view('signup');
    }
    public function register(Request $req){
        $image = $req->picture;
        if(!empty($image)){
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/profile'), $filename);
        } else {
            $filename = "profileicon.jpg";
        }
    	$auid = DB::table('author')->insertGetId([
    		'first_name' => $req->first_name,
    		'last_name' => $req->last_name,
    		'display_name' => $req->display_name,
            'prof_pic' => $filename
    	]);

    	DB::table('users')->insert([
    		'username' => $req->user_name,
    		'password' => bcrypt($req->user_password),
            'usertype' => '0',
    		'author_id' => $auid,
    	]);
    	return redirect('/Signin');
    }

    public function Article($id){
        $article = DB::table('article as a')->where('a.article_id',$id)->join('author as au','au.author_id','=','a.author_id')->first();
        return view('article',['article' => $article]);
    }
}

