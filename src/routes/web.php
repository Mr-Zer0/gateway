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

    Route::get('user/{id}/promote', 'UserController@promote')->name('user.promote');
    Route::get('user/{id}/demote', 'UserController@demote')->name('user.demote');

    Route::resource('user', 'UserController')->only([
        'index', 'show', 'edit', 'update'
    ]);
});

Route::get('/home', 'HomeController@index')->name('home');