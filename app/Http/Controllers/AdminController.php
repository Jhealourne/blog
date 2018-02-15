<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkgen'); 
    }
    public function AdminHome(){
    	return view('admin.home');
    }
}
