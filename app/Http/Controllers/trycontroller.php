<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TryController extends Controller
{
    public function showTry()
    {
    	return view('try');
    }
}
?>