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
use App\Models\Countries as CountryModel;
use App\Http\Resources\Event as EventResource;
use App\Http\Resources\Image as ImageResource;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Post as PostResource;
use App\Http\Resources\Country as CountryResource;

/**
* Group API routers
*/
	Route::prefix('api')->group(function () {
		/**
		* Define routers for Event resources
		*/
			Route::get('/events', function () {
				return new EventResource(EventModel::all());
			});

		/**
		* Define routers for Image resources
		*/
			Route::get('/images/get', function () {
				return new ImageResource(ImageModel::all());
			});
			Route::get('/images/users', function (ImageModel $imageModel) {
				return new ImageResource($imageModel->withUsers()->get());
			});

		/**
		* Define routers for Post resources
		*/
			Route::get('/posts', function () {
				return new PostResource(PostModel::allPosts());
			});
			Route::get('/posts/images', function (PostModel $postModel) {
				return new PostResource($postModel->withImages()->get());
			});

		/**
		* Define routers for User resources
		*/
			Route::get('/users', function (UserModel $userModel) {
				return new UserResource($userModel->fullData()->get());
			});
			Route::get('/users/images', function (UserModel $userModel) {
				return new UserResource($userModel->withImages()->get());
			});
			Route::get('/users/country', function (UserModel $userModel) {
				return new UserResource($userModel->withCountry()->get());
			});
			Route::get('/users/posts', function (UserModel $userModel) {
				return new UserResource($userModel->withPost()->get());
			});

		/**
		* Define routers for Country resources
		*/
			Route::get('/countries/posts', function (CountryModel $countryModel) {
				return new CountryResource($countryModel->withPost()->get());
			});
	});

Route::get('/', function () {
	echo '22';
});

/**
* Group routers require login
*/
	Route::group(['middleware' => ['auth']], function () {
		Route::get('/hot-news', function () {
			return View::make('post.index');
		});
		Route::get('/all-events', function () {
			return View::make('event.index');
		});
		Route::get('/logout', function () {
			\Session::forget('user');
			return redirect('login');
		});

		Route::prefix('cms')->group(function () {
			Route::get('event/create', 'CMS\EventController@create');
			Route::post('event/create', 'CMS\EventController@create');

			Route::get('post/create', function () {
				return View::make('cms.post.create');
			});
			Route::post('post/create', 'CMS\PostController@create');

			Route::get('post/update/{id}', function ($id) {
				return View::make('cms.post.update', array(
					'postObject' => PostModel::find($id)
				));
			});
			Route::put('post/update/{id}', 'CMS\PostController@update');
		});
	});

/**
* Group routers for Guest
*/
	Route::group(['middleware' => ['guest']], function () {
		Route::get('/login', function () {
			return View::make('auth.login');
		});
		Route::post('/login', 'AuthController@login');
	});
	
