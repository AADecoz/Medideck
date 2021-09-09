<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
})->name('welcome');

Route::get('/test', [\App\Http\Controllers\SenderController::class, "index"]);

Route::group(['middleware'=>['auth']], function (){
    Route::get('/dashboard/dmscope', 'App\Http\Controllers\DashboardController@dmscope')->name('dashboard.dmscope');
});

Route::group(['middleware'=>['auth']], function (){
    Route::get('/dashboard/eventscope', '\App\Http\Controllers\DashboardController@eventscope')->name('dashboard.eventscope');
});

Route::group(['middleware'=>['auth']], function(){
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::group(['middleware'=>['auth', 'role:user' ]], function(){
    Route::get('/dashboard/myprofile','App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});

Route::group(['middleware'=>['auth']], function(){
    Route::get('/dashboard/myentries','App\Http\Controllers\DashboardController@myentries')->name('dashboard.myentries');
});

Route::group(['middleware'=>['auth', 'role:administrator' ]], function(){
    Route::get('/dashboard/usermanagement','App\Http\Controllers\DashboardController@usermanagement')->name('dashboard.usermanagement');
});

Route::group(['middleware'=>['auth', 'role:administrator' ]], function(){
    Route::get('/dashboard/companymanagement','App\Http\Controllers\DashboardController@companymanagement')->name('dashboard.companymanagement');
});

//Route::group(['middleware'=>['auth', 'role:administrator']], function (){
//    Route::get('/dashboard/usermanagement/', 'App\Http\Controllers\DashboardController@single')->name('');
//});


require __DIR__.'/auth.php';
