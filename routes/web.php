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
 
Route::post('/login', 'WebController@login');
Route::post('/register', 'WebController@register');

Route::get('/', 'WebController@homepage');
Route::get('/Admin/Home', 'AdminController@AdminHome');
Route::get('/Category/{id}', ['uses' => 'WebController@Category']);

Route::get('/logout', 'WebController@logout');

Route::get('/AuthorProfile', 'AuthorController@Profile');
Route::get('/Settings', 'AuthorController@Settings');
Route::get('/WriteArticle', 'AuthorController@WriteArticle');
Route::get('/AuthorProfile/Edit/{id}', 'AuthorController@showEditArticle');
Route::post('/saveArticle', 'AuthorController@saveArticle');
Route::post('/savePic', 'AuthorController@savePic');
Route::post('/updateprofile', 'AuthorController@updateprofile');

Route::get('/Article/{id}', ['uses' => 'WebController@Article']);
Route::get('/ManageArticle', 'AuthorController@ManageArticle');

Route::get('/AdminLogin', 'WebController@showAdminLogin');
Route::post('/doLoginAdmin', 'WebController@doAdminLogin');

Route::get('/Admin/Category', 'AdminController@category');
Route::get('/getCategory', 'AdminController@getCategory');
Route::post('/addCategory', 'AdminController@addCategory');
Route::post('/editCategory', 'AdminController@editCategory');
Route::post('/delCategory', 'AdminController@delCategory');

