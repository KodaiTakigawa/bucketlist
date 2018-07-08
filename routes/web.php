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

Route::get('/mypage', 'MainController@mypage');
Route::post('/mypage', 'MainController@mypage');

Route::get('/mypage/edit', 'MainController@editMyprofile');
//Route::post('/mypage/edit', 'MainController@updateMypage');

Route::get('/mypage/mydream', 'MainController@mydream');
Route::post('/mypage/mydream', 'MainController@updateMydream');

Route::get('/mypage/mydream/edit', 'MainController@editMydream');

Route::get('/mypage/add-mydream', 'MainController@addMydream');
Route::post('/mypage/add-mydream', 'MainController@createMydream');

Route::get('/mypage/achivedlist', 'MainController@achivedList');

Route::get('/find-dreams', 'MainController@findDreams');

Route::get('/find-dreams/detail', 'MainController@findDreamsDetail');

Route::get('/find-dreams/profile', 'MainController@findDreamsProfile');

Route::get('/find-dreams/profile/achivedlist', 'MainController@findDreamsProfileAchivedlist');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// for social_login
Route::get('login/{provider}',          'Auth\SocialAccountController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\SocialAccountController@handleProviderCallback');
