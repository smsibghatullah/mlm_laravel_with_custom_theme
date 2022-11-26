<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;

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
Route::get('deposit', [FrontController::class, 'deposit'])->name('deposit');
// Route::get('/profiles/{id}', 'FrontController@show')->name('profiles.show');
Route::post('/store', [FrontController::class, 'save']);
Route::post('/loginpost', [FrontController::class, 'customLogin']); 
Route::get('logout', [FrontController::class, 'logout']);

Route::get('/administrator', [AdminController::class, 'index']);
Route::get('/administrator/users', [AdminController::class, 'users']);
Route::get('/administrator/userdetails/{id}', [AdminController::class, 'user']);
Route::get('/administrator/mark_approved/{id}', [AdminController::class, 'mark_approve_user']);
Route::get('/depositeform',[FrontController::class, 'depositeform']);

// Route::resource('/', 'App\Http\Controllers\FrontController@index');
// Route::resource('front', FrontController::class);
// Route::resource('front', FrontController::class);