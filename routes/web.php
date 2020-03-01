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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');//after login

// Route::resource('phones', 'PhoneController');

// Route::get('/welcome', function () {
//     return view('phones');
// });
Route::resource('phones', 'PhoneController');

Route::get('/users', 'UserController@index');

Route::resource('users', 'UserController');
Auth::routes();