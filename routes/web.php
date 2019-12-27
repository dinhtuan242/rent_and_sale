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

Route::get('/home', function () {
    return view('user.homepages.index');
})->name('homepage');
Auth::routes();
Route::group(['prefix' => 'property'], function () {
    Route::get('/create', 'User\PropertyController@create')->name('property.create.get');
    Route::post('/create', 'User\PropertyController@store')->name('property.create.post');
});
