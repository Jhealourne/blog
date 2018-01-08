<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function showSignin()
    {
    	return view('signin');
    }
}
?>