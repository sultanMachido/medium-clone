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
Route::view('home','home');
Route::view('write','write');
Route::view('about','about');
Route::view('contact','contact');
Route::view('profile','profile');

Route::get('settings','SettingsController@list');
