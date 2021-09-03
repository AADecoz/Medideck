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
//Route::get('index', function (){
//    return view('index');
//});
//
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['auth']], function (){
Route::get('main', '\App\Http\Controllers\DashboardController@main')->name('main');
});


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::group(['middleware'=>['auth']], function(){
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::group(['middleware'=>['auth', 'role:user' ]], function(){
    Route::get('/dashboard/myprofile','App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});

Route::group(['middleware'=>['auth', 'role:administrator' ]], function(){
    Route::get('/dashboard/usermanagement','App\Http\Controllers\DashboardController@usermanagement')->name('dashboard.usermanagement');
});


require __DIR__.'/auth.php';
