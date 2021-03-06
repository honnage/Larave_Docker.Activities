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
Route::resource('/topic', 'TopicTypeController');
Route::resource('/participants', 'ParticipantController');
Route::resource('/activity', 'ActivityController');
Route::resource('/registers', 'RegisterController');



Route::get('/', function () {
    return view('welcome');
    // return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


