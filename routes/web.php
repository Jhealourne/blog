<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('try');
});
Route::get('/try','TryController@showtry')->name('try');
Route::get('/Signin','WebController@showSignin')->name('signin');//signin

Route::get('/Signup','WebController@showSignup')->name('Signup');//Signup
Route::get('/login', 'WebController@login');
Route::post('/register', 'WebController@register');

Route::get('/', 'WebController@homepage');
 