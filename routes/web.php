<?php

use App\Http\Controllers\NotesController;
//use Auth;

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home/admin', 'HomeController@admin')->name('admin');

//ADMIN
Route::resource('/admin', 'AdminController');

Route::post('updateTitle/','NotesController@updateTitle');
Route::post('/refresh','NotesController@get');
Route::post('/update','NotesController@updateBody');
