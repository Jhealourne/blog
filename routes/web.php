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
Route::get('/saveRating', 'WebController@saveRating');
Route::get('/getRating', 'WebController@getRating');

Route::get('/logout', 'WebController@logout');

Route::get('/AuthorProfile', 'AuthorController@Profile');
Route::get('/Settings', 'AuthorController@Settings');
Route::get('/WriteArticle', 'AuthorController@WriteArticle');
Route::get('/AuthorProfile/Edit/{id}', 'AuthorController@showEditArticle');
Route::get('/AuthorProfile/Delete/{id}', 'AuthorController@deleteArticle');
Route::post('/saveArticle', 'AuthorController@saveArticle');
Route::post('/editArticle', 'AuthorController@editArticle');
Route::post('/savePic', 'AuthorController@savePic');
Route::post('/updateprofile', 'AuthorController@updateprofile');

Route::get('/Article/{id}', ['uses' => 'WebController@Article']);
Route::post('/addComment', 'AuthorController@addComment');

Route::get('/Admin/Category', 'AdminController@category');
Route::get('/getCategory', 'AdminController@getCategory');
Route::post('/addCategory', 'AdminController@addCategory');
Route::post('/editCategory', 'AdminController@editCategory');
Route::post('/delCategory', 'AdminController@delCategory');

Route::get('/Admin/Users','AdminController@Users');
Route::post('/delUser','AdminController@delUser');
Route::get('/Admin/Article','AdminController@Article');
Route::get('/Admin/Article/Delete/{id}', 'AdminController@deleteArticle');