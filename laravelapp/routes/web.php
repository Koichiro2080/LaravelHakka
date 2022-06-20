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

Route::get('main','App\Http\Controllers\MusicController@main');
Route::post('main','App\Http\Controllers\MusicController@create');
Route::get('show','App\Http\Controllers\MusicController@show');