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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'pagesController@getHome');
Route::get('/postjob', 'pagesController@getJobPortal')->name('postJob');
Route::post('/postjob', 'jobController@postJobDesc')->name('jobDesc');
Route::get('confirm', 'pagesController@confirm')->name('confirm');
Route::get('/searchjob', 'jobController@searchJob')->name('search');
