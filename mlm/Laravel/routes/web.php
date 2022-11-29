<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InboxController;


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
// Route::resource('users', UserController::class);
Route::get('/', [FrontController::class, 'index']);
Route::get('/register', [FrontController::class, 'create']);

Route::get('login', [FrontController::class, 'login'])->name('login');



///    ------- after login ---------
Route::group(['middleware' => ['auth']], function() {

Route::get('/activity', [FrontController::class, 'activity']);
Route::get('/deposit', [FrontController::class, 'depositform']);
Route::get('/profile/{id}', [FrontController::class, 'show']);
Route::post('/dailytaskcomplate', [FrontController::class, 'dailytaskcomplate']);
Route::get('/tree', [FrontController::class, 'tree']);
Route::get('/transactions', [FrontController::class, 'transactions']);
Route::post('/savedeposit', [FrontController::class, 'savedeposit']);
Route::get('/administrator', [AdminController::class, 'index']);

Route::get('/administrator/users', [AdminController::class, 'users']);
Route::get('/administrator/news', [AdminController::class, 'news'])->name('/administrator/news');;
Route::get('/administrator/news/create', [AdminController::class, 'newscreate']);
Route::post('/administrator/news/create', [AdminController::class, 'savenews']);


Route::get('/administrator/userdetails/{id}', [AdminController::class, 'user']);
Route::get('/administrator/mark_approved/{id}', [AdminController::class, 'mark_approve_user']);
Route::get('logout', [FrontController::class, 'logout']);


});




Route::get('/blog', [FrontController::class, 'blog']);

// Route::get('/profiles/{id}', 'FrontController@show')->name('profiles.show');
Route::post('/store', [FrontController::class, 'save']);
Route::post('/loginpost', [FrontController::class, 'customLogin']); 

// Route::get('/depositform',[FrontController::class, 'depositeform']);

// Route::resource('/', 'App\Http\Controllers\FrontController@index');
// Route::resource('front', FrontController::class);
// Route::resource('front', FrontController::class);
// Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/inbox', [InboxController::class, 'index'])->name('inbox.index');
    Route::get('/inbox/{id}', [InboxController::class, 'show'])->name('inbox.show');
});
