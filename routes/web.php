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

Route::get('/mypage', 'MainController@mypage')->middleware('auth');
Route::post('/mypage', 'MainController@mypage')->middleware('auth');

Route::get('/mypage/edit', 'MainController@editMypage')->middleware('auth');
Route::post('/mypage/edit', 'MainController@updateMypage')->middleware('auth');

Route::get('/mypage/mydream', 'MainController@mydream')->middleware('auth');

Route::get('/mypage/mydream/edit', 'MainController@editMydream')->middleware('auth');
Route::post('/mypage/mydream/edit', 'MainController@updateMydream')->middleware('auth');

Route::get('/mypage/add-mydream', 'MainController@addMydream')->middleware('auth');
Route::post('/mypage/add-mydream', 'MainController@createMydream')->middleware('auth');

Route::get('/mypage/achivedlist', 'MainController@achievedList')->middleware('auth');
Route::post('/mypage/achivedlist', 'MainController@achieveDream')->middleware('auth');

Route::get('/find-dreams', 'MainController@findDreams');

Route::get('/find-dreams/detail', 'MainController@findDreamsDetail');

Route::get('/find-dreams/profile', 'MainController@findDreamsProfile');

Route::get('/find-dreams/profile/achivedlist', 'MainController@findDreamsProfileAchivedlist');

Auth::routes();

//count good
Route::post('/dream_good', 'MainController@countGoods');

//iranai
Route::get('/home', 'HomeController@index')->name('home');

// for social_login
Route::get('login/{provider}',          'Auth\SocialAccountController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\SocialAccountController@handleProviderCallback');
