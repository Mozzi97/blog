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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('mainPage');
})->name('mainPage');

Route::any('home/test/submitPage', 'TestController@submitPage');
Route::any('home/test/articalList', 'TestController@articalList')
														->name('articalList');
Route::get('home/test/articals', 'TestController@articals')->name('articals');
Route::get('home/test/myself', 'TestController@aboutMe');