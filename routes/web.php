<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PageController@index')->name('home');
Route::get('/test', 'PageController@test')->name('test');

Route::get('/about', 'PageController@about')->name('about');

Route::get('/our-cars', 'PageController@cars')->name('our-cars');

Route::post('/contact-us', 'ContactUsFormController@ContactUsForm')->name('contact');


Auth::routes(['verify' => true]);

Route::group(['middleware' => 'is.admin'], function () {
    Route::get('/admin-panel', 'PageController@panel')->name('panel');
    Route::resource('cars', 'CarController');
    Route::resource('users', 'UserController');
    Route::resource('partners', 'PartnerController');
});

