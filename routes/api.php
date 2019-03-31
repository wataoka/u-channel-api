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

Route::get('messages/university/{university_id}', 'MessageController@show_messages_university')->name('messages.show_university');

Route::get('regions', 'UniversityController@show_regions')->name('universities.show_regions');
Route::get('prefectures', 'UniversityController@show_prefectures')->name('universities.show_prefectures');

Route::get('universities/region/{region}', 'UniversityController@show_university_region')->name('universities.show_university_region');
Route::get('universities/prefecture/{prefecture}', 'UniversityController@show_university_prefecture')->name('universities.show_university_prefecture');