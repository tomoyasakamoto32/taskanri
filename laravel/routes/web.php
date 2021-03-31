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
    Route::get('show/{id}', 'TaskController@show')->name('show');
    Route::get('edit/{id}', 'TaskController@edit')->name('edit');
    Route::post('update/{id}', 'TaskController@update')->name('update');
    Route::post('destroy/{id}', 'TaskController@destroy')->name('destroy');
    Route::get('category/{id}', 'TaskController@category')->name('category');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


