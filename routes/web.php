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
use App\Models\Images as ImageModel;
use App\Models\Users as UserModel;
use App\Models\Posts as PostModel;
use App\Http\Resources\Event as EventResource;
use App\Http\Resources\Image as ImageResource;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Post as PostResource;

Route::get('/posts', 'WebServices\PostController@index');
Route::get('/events', function () {
	return new EventResource(EventModel::all());
});
Route::get('/images/get', function () {
	return new ImageResource(ImageModel::all());
});
Route::get('/users/images', function (UserModel $userModel) {
	return new UserResource($userModel->withImages());
});
Route::get('/posts/images', function (PostModel $postModel) {
	return new ImageResource($postModel->withImages());
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
