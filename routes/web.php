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

Route::get('/blogs/create', 'PagesController@create');
Route::post('/blogs', 'PagesController@store');
Route::get('/blogs/{blogs}', 'PagesController@show');
    Route::get('/blogs/{blogs}/edit', 'PagesController@edit')->name('blogs.edit');
Route::patch('/blogs/{Blogs}', 'PagesController@update');
route::delete('/blogs/{blogs}', 'PagesController@destroy');


Route::get('/', 'PagesController@welcome');
Route::get('/index', 'PagesController@index');
Route::get('/blogs', 'PagesController@blogs');
Route::get('/info', 'PagesController@info');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
