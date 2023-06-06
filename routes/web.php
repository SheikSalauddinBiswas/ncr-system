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
    return view('cover');
});
Route::get('/signin', function () {
    return view('user.signin');
});
Route::get('/signup', function () {
    return view('user.signup');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');
