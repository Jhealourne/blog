<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WebController extends Controller
{
    public function homepage(){
    	return view('homepage');
    }

    public function showSignin(){
    	return view('signin');
    }
    public function login(){
    	
    }

    public function showSignup(){
    	return view('signup');
    }
    public function register(Request $req){
    	// DB::table('users')->insert([
    	// 	'username' => 'admin',
    	// 	'password' => bcrypt('admin'),
    	// ]);
    	$auid = DB::table('author')->insertGetId([
    		'first_name' => $req->first_name,
    		'last_name' => $req->last_name,
    		'display_name' => $req->display_name,
    		'description' => '',
    		'profile_pic' => '',
    		'profile_cover' => '',
    		'url' => '',
    	]);

    	DB::table('users')->insert([
    		'username' => $req->user_name,
    		'password' => bcrypt($req->user_password),
    		'author_id' => $auid,
    	]);
    	return redirect('/Signin');
    }
}

