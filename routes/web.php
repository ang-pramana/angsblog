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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'postController@index')->name('post.index');
Route::get('/post/create', 'postController@create')->name('post.create');
Route::post('/post/create', 'postController@store')->name('post.store');
Route::get('/post/{post}', 'postController@show')->name('post.show');
Route::get('/post/{post}/edit', 'postController@edit')->name('post.edit');
Route::patch('/post/{post}/edit', 'postController@update')->name('post.update');
Route::delete('/post/{post}/delete', 'postController@destroy')->name('post.destroy');