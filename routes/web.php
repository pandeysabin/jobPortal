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

Route::prefix('jobs')->group(function (){
    Route::get('/', 'PagesController@getHome')->name('home');
    Route::get('/postjob', 'PagesController@getJobPortal')->name('postJob');
    Route::post('/postingjob', 'JobController@postJobDesc')->name('jobDesc');
    Route::get('/confirm', 'PagesController@confirm')->name('confirm');
    Route::get('/searchjob', 'JobController@searchJob')->name('search');
});