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

Route::prefix('jobs')->group(function () {
    Route::get('/', 'PagesController@getHome')->name('home');
    Route::get('/post-job', 'PagesController@getJobPortal')->name('postJob');
    Route::post('/posting-job', 'JobController@postJobDesc')->name('jobDesc');
    Route::get('/confirm', 'PagesController@confirm')->name('confirm');
    Route::get('/search-job', 'JobController@searchJob')->name('search');
    Route::post('/val-auth/{id}/authentciate', 'JobController@auth')->name('job.valAuth');
    Route::post('/edit/{uid}', 'JobController@edit')->name('job.edit');
    Route::post('/update/{id}', 'JobController@update')->name('job.update');
    Route::delete('/delete/{id}', 'JobController@destroy')->name('job.delete');
    Route::get('/search-job', 'PagesController@searchJob')->name('pages.search');
    Route::post('/search', 'JobController@search')->name('search');
});