<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GdController;
use App\Http\Controllers\AdminDashboardController;

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

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard.dashboard');
// });






Auth::routes();

Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');

Route::group(['prefix'=>'user','as'=>'user.'],function(){

    Route::get('/',[App\Http\Controllers\DashboardController::class, 'index'])->name('user');
    
    Route::resource('/dashboard',GdController::class);
});


Route::group(['prefix'=>'admin','as'=>'admin.'],function(){

    Route::get('/',[App\Http\Controllers\AdminDashboardController::class, 'index'])->name('admin');
    
    
});