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
    return view('top');
});

Auth::routes();
Route::get('home', 'App\Http\Controllers\ReviewsController@index');
Route::get('home', 'App\Http\Controllers\ReviewsController@test');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
