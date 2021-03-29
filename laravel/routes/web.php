<?php

use Illuminate\Support\Facades\Route;

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
    return view('top');
});

Route::group(['prefix' => 'tasks', 'middleware' => 'auth'], function(){
    Route::get('index', 'TaskController@index')->name('index');
    Route::get('create', 'TaskController@create')->name('create');
    Route::post('store', 'TaskController@store')->name('store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


