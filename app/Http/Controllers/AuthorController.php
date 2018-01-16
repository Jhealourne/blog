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
    	return view('author.home');
    }
    public function WriteArticle(){
        return view('author.write');
    }
    public function saveArticle(Request $req){
        DB::table('article')->insert([
            'article_title' => $req->title,
            'article_summary' => $req->summary,
            'article_thumbnail' => 'lolo',
            'article_full' => $req->article,
            'author_id' => Auth::user()->author_id,
            'publish_datetime' => date_create('now')->format('Y-m-d H:i:s')
        ]);

        return redirect('/AuthorHome');
    }
    public function Profile(){
        $author = DB::table('author')->where('author_id',Auth::user()->author_id)->first();
        $article = DB::table('article')->where('deleted',0)->get();
        return view('author.profile',['article' => $article, 'author' => $author]);
    }
}
