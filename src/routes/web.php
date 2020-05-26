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
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('application', 'ApplicationController');
    Route::resource('user', 'UserController');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/testing', function () {
    return App\Util\Keygen::generate(App\Application::findOrFail(1), Auth::user());
});