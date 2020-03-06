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

Route::any('/', function () {
    return view('mainPage');
})->name('mainPage');
// User authorization on MainPage
Auth::routes();

Route::any('home/test/submitPage', 'TestController@submitPage');
Route::any('home/test/mList', 'TestController@mList')
														->name('mList')->middleware(['auth']);
Route::get('home/test/articals', 'TestController@articals')->name('articals');
Route::get('home/test/myself', 'TestController@aboutMe');

Route::any('home/test/deleteArtical/{Artical_id}','TestController@deleteArtical');
Route::any('home/test/reviseArtical/{Artical_id}','TestController@reviseArtical');


Route::get('/home', 'HomeController@index')->name('home');

