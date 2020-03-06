<?php

use Illuminate\Http\Request;

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

Route::get('/picture/{pid}', 'PictureController@getPicture');
Route::get('/thumb/{orderType}/{page}', 'PictureController@getThumb');
Route::get('/tag/{pid}', 'TagController@get');
Route::get('/score/{pid}', 'ScoreController@get');


Route::group(['middleware' => 'auth:api'], function () {
    Route::post('/picture', 'PictureController@upload');
    Route::put('/picture/{pid}', 'PictureController@update');
    Route::delete('/picture/{pid}', 'PictureController@delete');

    Route::post('/tag', 'TagController@upload');
    Route::put('/tag/{tid}', 'TagController@update');
    Route::delete('/tag/{tid}', 'TagController@delete');

    Route::post('/score', 'ScoreController@upload');
    Route::put('/score/{sid}', 'ScoreController@update');
    Route::delete('/score/{sid}', 'ScoreController@delete');
});
