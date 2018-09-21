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
//
// Route::get('/', function () {
//     return view('welcome');
// });
//


Route::get('/', 'MainController@index');

Route::get('/mypage', 'UserController@mypage')->middleware('auth');
Route::post('/mypage', 'UserController@mypage')->middleware('auth');

Route::get('/mypage/mydream', 'DreamController@mydream')->middleware('auth');

Route::get('/mypage/mydream/edit', 'DreamController@editMydream')->middleware('auth');
Route::post('/mypage/mydream/edit', 'DreamController@updateMydream')->middleware('auth');

Route::get('/mypage/add-mydream', 'DreamController@addMydream')->middleware('auth');
Route::post('/mypage/add-mydream', 'DreamController@createMydream')->middleware('auth');

Route::get('/mypage/achivedlist', 'UserController@achievedList')->middleware('auth');
Route::post('/mypage/achivedlist', 'UserController@achieveDream')->middleware('auth');

Route::get('/find-dreams', 'MainController@findDreams');

Route::get('/find-dreams/detail', 'MainController@findDreamsDetail');

Route::get('/find-dreams/profile', 'MainController@findDreamsProfile');

Route::get('/find-dreams/profile/achivedlist', 'MainController@findDreamsProfileAchivedlist');

Auth::routes();

// count good
Route::post('/dream_good', 'MainController@countGoods');

// update profile
Route::post('/update_profile', 'DreamController@updateProfile')->middleware('auth');

// for social_login
Route::get('login/{provider}',          'Auth\SocialAccountController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\SocialAccountController@handleProviderCallback');
