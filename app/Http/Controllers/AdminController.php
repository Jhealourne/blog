<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

use App\Users;
use App\Rating;
use App\Article;
use App\Category;
use App\Author;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkadm'); 
    }
    public function AdminHome(){
    	return view('admin.home');
    }

    public function category(Request $req){
    	$ctgry = DB::table('category')->where('deleted',0)->get();
    	return view('admin.category',compact('ctgry'));
    }
    public function addCategory(Request $req){
    	DB::table('category')->insert([ 'category_name' => $req->ctgry ]);
    	return redirect('/Admin/Category');
    }
    public function editCategory(Request $req){
    	DB::table('category')->where('category_id',$req->id)->update([ 'category_name' => $req->ctgry ]);
    	return redirect('/Admin/Category');
    }
    public function delCategory(Request $req){
    	DB::table('category')->where('category_id',$req->id)->delete();
    	return redirect('/Admin/Category');
    }
    public function getCategory(Request $req){
    	$var = DB::table('category')->where('category_id',$req->cid)->first();
    	return response()->json($var);
    }

    public function Users(){
        $users = Users::where('deleted',0)->where('id','!=',1)->get();
        return view('admin.users',compact('users'));
    }
}
