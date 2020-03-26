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


Route::get('/', 'UserController@index');
Route::get('/mypatient', 'UserController@mypatient');
Route::get('/mypatient/new', 'UserController@newmypatient');

Auth::routes();

Route::group(['middleware'=>'auth'], function(){
  Route::post('/mypatinet/create');
});


Route::get('/home', 'HomeController@index')->name('home');
