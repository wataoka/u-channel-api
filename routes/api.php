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

Route::apiResource('universities', 'UniversityController');
Route::apiResource('messages', 'MessageController');
Route::get('messages/univ/{univ_id}', 'MessageController@show_messages_univ')->name('messages.show_univ');