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

Route::get('/', 'PagesController@index');
Route::resource('notes','NotesController');
Route::get('notes/update', 'NotesController@updateTitle');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/admin', 'HomeController@admin')->name('admin');
