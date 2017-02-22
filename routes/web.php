<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/main', function () {
    return view('home');
});

Route::get('/signin', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('register.register');
});

Route::group(['middleware'=>['web']],function(){
	Route::resource('blog','BlogController');
});

Route::group(['middleware'=>['web']],function(){
  Route::resource('register','RegisterController');
});

Route::post('/register_action','RegisterController@store');
Route::post('/login_check','RegisterController@login');

Route::get('/signout',function(){
  Auth::logout();
  return Redirect::to('main');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/uploadfile','UploadController@getView');

Route::post('insertfile',array('as'=>'insertfile','uses'=>'UploadController@insertfile'));

Route::get('/show','RegisterController@dataRegister');
