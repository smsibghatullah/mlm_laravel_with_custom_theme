<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::resource('users', UserController::class);
Route::get('/', [FrontController::class, 'index']);
Route::get('/register', [FrontController::class, 'create']);
Route::get('/profile/{id}', [FrontController::class, 'show']);
Route::get('login', [FrontController::class, 'login'])->name('login');
// Route::get('/profiles/{id}', 'FrontController@show')->name('profiles.show');
Route::post('/store', [FrontController::class, 'save']);
Route::post('/custom-login', [FrontController::class, 'customLogin'])->name('login.custom'); 

// Route::resource('/', 'App\Http\Controllers\FrontController@index');
// Route::resource('front', FrontController::class);
// Route::resource('front', FrontController::class);