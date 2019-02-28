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

Route::get('/', 'CategoryController@showCat');
Route::get('/category/{cat_id}', 'ApplicationController@showApp')->name('app.show');

Auth::routes();

Route::group(['middleware'=> 'auth'],function(){
    Route::post('/admin/store','ApplicationController@store')->name('store');
    Route::get('/admin/delete/{id}','ApplicationController@deleteApp')->name('deleteApp');
    Route::get('/admin/edit/{id}','ApplicationController@editApp')->name('editApp');
    Route::get('/admin', function (){
        return view('back-end.index');
    });
    Route::get('/admin/task','Admin\ContactController@index')->name('tasks');
    Route::get('/admin/application/','ApplicationController@getApplication')->name('application');
    Route::get('/admin/application-create','ApplicationController@create')->name('create');
    Route::get('/admin/task/delete/{id}','Admin\ContactController@delete');
    /*category*/
    Route::get('/admin/category/','CategoryController@index')->name('category');
    Route::get('/admin/category/create','CategoryController@create')->name('category.create');
    Route::post('/admin/category/store','CategoryController@store')->name('category.store');
    Route::get('/admin/category/delete/{id}','CategoryController@delete')->name('category.delete');
    Route::get('/admin/category/edit/{id}','CategoryController@categoryEdit')->name('category.edit');
    Route::post('/admin/ajax-image','CategoryController@ajax');

});
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/contact','Admin\ContactController@store');
//Route::get('/admin','Admin\ContactController@index');
