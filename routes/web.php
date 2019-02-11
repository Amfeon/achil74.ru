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

Route::get('/', function () {
    return view('front-end.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/contact','Admin\ContactController@store');
Route::post('/admin/store','ApplicationController@store')->name('store');
//Route::get('/admin','Admin\ContactController@index');
Route::get('/admin', function (){
  return view('back-end.index');  
});
Route::get('/admin/task','Admin\ContactController@index')->name('tasks');
Route::get('/admin/application/','ApplicationController@getApplication')->name('application');
Route::get('/admin/application-create','ApplicationController@create')->name('create');
Route::get('/admin/task/delete/{id}','Admin\ContactController@delete');