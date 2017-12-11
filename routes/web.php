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

use App\Models\Events as EventModel;
use App\Http\Resources\Event as EventResource;

Route::get('/posts', 'WebServices\PostController@index');
Route::get('/events', function () {
	return new EventResource(EventModel::all());
});

Route::get('/', function () {
	echo '22';
});

Route::get('/hot-news', function () {
	return View::make('post.index');
});
Route::get('/all-events', function () {
	return View::make('event.index');
});

Route::get('/cms/event/create', 'CMS\EventController@create');
Route::post('/cms/event/create', 'CMS\EventController@create');