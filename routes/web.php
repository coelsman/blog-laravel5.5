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

Route::get('/posts', 'WebServices\PostController@index');
Route::get('/posts/page/{page}', array('uses' => 'WebServices\PostController@index'));

Route::get('/', function () {
	echo '22';
});

Route::get('/hot-news', 'PostController@index');