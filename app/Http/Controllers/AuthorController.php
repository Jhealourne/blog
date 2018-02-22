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
        $this->middleware('checkgen'); 
    }

    public function AuthorHome(){
    	return view('author.home',['article' => $article]);
    }
    public function WriteArticle(){
        $ctgry = DB::table('category')->where('status',0)->get();
        return view('author.write',compact('ctgry'));
    }
    public function savePic(Request $req){
        $accepted_origins = array("http://localhost", "http://192.168.1.1", "http://example.com");
  
          /*********************************************
           * Change this line to set the upload folder *
           *********************************************/
          $imageFolder = "images/";
          
          reset ($_FILES);
          $temp = current($_FILES);
          if (is_uploaded_file($temp['tmp_name'])){
            if (isset($_SERVER['HTTP_ORIGIN'])) {
              // same-origin requests won't set an origin. If the origin is set, it must be valid.
              if (in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)) {
                header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
              } else {
                header("HTTP/1.0 403 Origin Denied");
                return;
              }
            }
              
            /*
              If your script needs to receive cookies, set images.upload.credentials:true in
              the Textbox.io configuration and enable the following two headers.
            */
            // header('Access-Control-Allow-Credentials: true');
            // header('P3P: CP="There is no P3P policy."');
            // Sanitize input
            if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
                header("HTTP/1.0 500 Invalid file name.");
                return;
            }
            // Verify extension
            if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))) {
                header("HTTP/1.0 500 Invalid extension.");
                return;
            }
            // Accept upload if there was no origin, or if it is an accepted origin
            $filetowrite = $imageFolder . $temp['name'];
            move_uploaded_file($temp['tmp_name'], $filetowrite);
          
            // Respond to the successful upload with JSON.
            // Use a location key to specify the path to the saved image resource.
            // { location : '/your/uploaded/image/file'}
            echo json_encode(array('location' => $filetowrite));
          } else {
            // Notify Textbox.io editor that the upload failed
            header("HTTP/1.0 500 Server Error");
          }
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
            'category_id' =>$req->ctgry,
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
    public function updateprofile(Request $req){
        $image = $req->picture;
        if(!empty($image)){
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/profile'), $filename);
        } else {
            $filename = "profileicon.jpg";
        }
        DB::table('author')->where('author_id',$req->id)->update([
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'display_name' => $req->display_name,
            'prof_pic' => $filename
        ]);

        // DB::table('users')->insert([
        //     'username' => $req->user_name,
        //     'password' => bcrypt($req->user_password),
        //     'author_id' => $auid,
        // ]);
        return redirect('/AuthorProfile');
    }
    public function ManageArticle(){
        return view('author.manage');
    }
}
