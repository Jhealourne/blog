<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

use App\Rating;
use App\Article;
use App\Category;
use App\Author;
use App\Comments;

class WebController extends Controller
{ 
    public function homepage(){
        $carousel = Article::where('deleted',0)->orderByRaw("RAND()")->take(3)->get();
        $article = Article::orderby('publish_datetime','DESC')->where('deleted',0)->take(10)->get();
        $category = Category::where('deleted',0)->get();
        return view('homepage',compact('article','carousel','category'));
    }
    public function Category($id){
        $article = Article::where('category_id',$id)->orderby('publish_datetime','DESC')->where('deleted',0)->get();
        $ctgry = Category::where('category_id',$id)->first();
        return view('category',compact('article','ctgry'));
    }

    public function showSignin(){
    	return view('signin');
    }
    public function login(Request $req){
        if(Auth::attempt(['username'=> $req->username,'password'=> $req->password, 'deleted' => 0])){
            setcookie('userid',Auth::id());
            if (Auth::user()->usertype == 1) {
                return redirect('/Admin/Home');
            } else {
                return redirect('/');
            }
        } else {
        	return redirect('/Signin');
        }
    }
    public function logout(Request $request) {
	  Auth::logout();
      setcookie('userid', null, time() - 3600);
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
    	$auid = Author::insertGetId([
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
        $article = Article::where('article_id',$id)->first();
        // $rate = Rating::groupBy('rate')->where('article_id',$id)->orderBy('count', 'desc')->get(['rate', DB::raw('count(rate) as count')]);
        $rate = Rating::where('article_id',$id)->get(); 
        $comments = Comments::where('article_id',$id)->get();
        return view('article',compact('article','rate','comments'));
    }
    public function saveRating(Request $req){
        if (Rating::where('article_id',$req->articleid)->where('userid',Auth::user()->author_id)->first()) {
            $rate = Rating::where('article_id',$req->articleid)->where('userid',Auth::user()->id)->first()->rate;
            Rating::where('article_id',$req->articleid)->where('userid',Auth::user()->author_id)->update([
                'rate' => $req->rate ,
            ]);
            return response()->json($rate);
        } else {
            Rating::insert([
                'article_id' => $req->articleid ,
                'userid' => Auth::user()->author_id ,
                'rate' => $req->rate ,
            ]);
            return response()->json(0);
        }
        return response()->json();
    }
    public function getRating(Request $req){
        $var = Rating::where('article_id',$req->articleid)->where('userid',$req->user)->first();
        return response()->json($var->rate);
    }
}

