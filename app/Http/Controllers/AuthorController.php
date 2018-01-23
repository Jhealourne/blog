<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class AuthorController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('checkgen');
        // parent::__construct();
    }

    public function AuthorHome(){
    	return view('author.home',['article' => $article]);
    }
    public function WriteArticle(){
        return view('author.write');
    }
    public function saveArticle(Request $req){
        $image = $req->thumbnail;
        if(!empty($image)){
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/thumbnails'), $filename);
        } else {
            $filename = "noimage.jpeg";
        }
        DB::table('article')->insert([
            'article_title' => $req->title,
            'article_summary' => $req->summary,
            'article_thumbnail' => $filename,
            'article_full' => $req->article,
            'author_id' => Auth::user()->author_id,
            'publish_datetime' => date_create('now')->format('Y-m-d H:i:s')
        ]);

        return redirect('/AuthorProfile');
    }
    public function Profile(){
        $author = DB::table('author')->where('author_id',Auth::user()->author_id)->first();
        $article = DB::table('article')->where('author_id',Auth::user()->author_id)->where('deleted',0)->orderby('publish_datetime','DESC')->get();
        return view('author.profile',['article' => $article, 'author' => $author]);
    }
    public function Settings(){
        $author = DB::table('author')->where('author.author_id',Auth::user()->author_id)->join('users as u','u.author_id','=','author.author_id')->first();

        return view('author.settings',['author' => $author]);
    }
    public function ManageArticle(){
        return view('author.manage');
    }
}
