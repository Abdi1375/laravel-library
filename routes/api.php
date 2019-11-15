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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/book', 'NewbookController@search')->middleware('cors');
Route::post('/book/all', 'NewbookController@index')->middleware('cors');
Route::post('/book/post', 'NewbookController@post')->middleware('cors');
Route::post('/book/delete', 'NewbookController@delete')->middleware('cors');
Route::post('/book/put', 'NewbookController@put')->middleware('cors');
Route::post('/register', 'Api\AuthController@register')->middleware('cors');
Route::post('/login', 'Api\AuthController@login')->middleware('cors');