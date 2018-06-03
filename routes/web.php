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
/*/////////////////////////default jeta cilo
Route::get('/', function () {
    return view('master');
});
*/
Route::get('/','WelcomeController@index');
Route::get('/contact','WelcomeController@contact');
Route::get('/blog_read_more','WelcomeController@blog_read_more');
//Route::get('/user', 'UserController@index');
Route::get('/support','WelcomeController@support');

