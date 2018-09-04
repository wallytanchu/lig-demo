<?php

use Illuminate\Http\Request;
use App\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Routes for auth
Route::group(['prefix' => 'v1'], function () {

    // post controller
    Route::get('posts', 'PostController@index');
    Route::get('posts/{post}', 'PostController@show');

    Route::group(['middleware' => 'auth:api'], function() {
        Route::post('posts', 'PostController@store');
        Route::post('posts/{post}', 'PostController@update');
        Route::delete('posts/{post}', 'PostController@delete');
    });
  
    // Routes for auth
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', 'AuthController@login');
        Route::group(['middleware' => 'auth:api'], function() {
            Route::get('logout', 'AuthController@logout');
        });
    });    
});




