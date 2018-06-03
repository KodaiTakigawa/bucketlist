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

Route::get('/mypage/mydream', 'MainController@mydream');

Route::get('/mypage/add-mydream', 'MainController@addMydream');

Route::get('/mypage/achivedlist', 'MainController@achivedList');

Route::get('/find-dreams', 'MainController@findDreams');

Route::get('/find-dreams/detail', 'MainController@findDreamsDetail');

Route::get('/find-dreams/profile', 'MainController@findDreamsProfile');

Route::get('/find-dreams/profile/achivedlist', 'MainController@findDreamsProfileAchivedlist');
