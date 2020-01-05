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
    return redirect('/');
})->name('homepage');
Route::get('', 'User\HomeController@index');
Auth::routes();
Route::group(['prefix' => 'property'], function () {
    Route::get('/create', 'User\PropertyController@create')->name('property.create.get');
    Route::post('/create', 'User\PropertyController@store')->name('property.create.post');
    Route::get('{id}', 'User\PropertyController@detail')->name('property.detail');
});
Route::group(['prefix' => 'user'], function () {
    Route::get('{id}', 'User\UserController@index')->name('user.index');
    Route::get('{id}/tai-san-cua-toi', 'User\UserController@userProperty')->name('user.property');
    Route::post('{id}/tai-san-cua-toi/delete/{propertyId}', 'User\UserController@deleteProperty')->name('user.delteProperty');
    Route::get('{id}/tai-san-cua-toi/edit/{propertyId}', 'User\PropertyController@editProperty')->name('user.editProperty');
    Route::post('{id}/tai-san-cua-toi/edit/{propertyId}', 'User\PropertyController@updateProperty')->name('user.updateProperty');
});
