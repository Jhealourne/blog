<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('checkgen');
        // parent::__construct();
        // die();
    }

    public function AuthorHome(){
    	return view('author.home');
    }
    public function WriteArticle(){

        return view('author.write');
    }
}
