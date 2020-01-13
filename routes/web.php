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
    return view('home');
});


Route::get('courses','CoursesController@index');
Route::get('/cart', 'CoursesController@cart');
Route::get('add-to-cart/{id}', 'CoursesController@addToCart');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('createWord', ['as'=>'createWord','uses'=>'WordDownload@createWord']);
Route::delete('remove-from-cart', 'CoursesController@remove');
