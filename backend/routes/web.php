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


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/groups', 'GroupsController@index')->name('groups');
Route::resource('/groups', 'GroupsController')->except(['index','show']);



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
