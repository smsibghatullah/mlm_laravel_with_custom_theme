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

// Route::resource('users', UserController::class);
Route::get('/',  [FrontController::class, 'index']);

Route::get('/register/{refcode?}', [FrontController::class, 'create']);

Route::get('login', [FrontController::class, 'login'])->name('login');

Route::group(['middleware' => ['EnsureIsAdmin']], function() {
    Route::get('/administrator', [AdminController::class, 'users']);
   

    Route::get('/administrator/users', [AdminController::class, 'users']);
    Route::get('/administrator/withdrawrequest', [AdminController::class, 'withdrawrequest']);
    Route::get('/administrator/withdraw/{status}/{id}', [AdminController::class, 'withdrawstauts']);

    Route::get('/administrator/news', [AdminController::class, 'news'])->name('/administrator/news');
    Route::get('/administrator/news/create', [AdminController::class, 'newscreate']);
    Route::get('/administrator/news/view/{id}', [AdminController::class, 'newsview']);
    Route::post('/administrator/news/create', [AdminController::class, 'savenews']);
    Route::get('/administrator/transaction/{id}', [AdminController::class, 'transaction']);
    Route::post('/administrator/transaction', [AdminController::class, 'savetransaction'])->name('/administrator/transaction');

    Route::get('/administrator/userdetails/{id}', [AdminController::class, 'user']);
    Route::get('/administrator/settings', [AdminController::class, 'settings'])->name('/administrator/settings');;


    Route::get('/administrator/settingedit/{id}', [AdminController::class, 'settingedit']);
    Route::get('/administrator/settingdelete/{id}', [AdminController::class, 'settingdelete']);
    Route::post('/administrator/settingedit/{id}', [AdminController::class, 'settingedit']);


    Route::get('/administrator/setting/create', [AdminController::class, 'settingcreate']);
    Route::post('/administrator/setting/create', [AdminController::class, 'settingcreate']);

    Route::get('/administrator/mark_approved/{id}', [AdminController::class, 'mark_approve_user']);

});

///    ------- after login ---------
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [FrontController::class, 'dashboard']);
     

    Route::get('/activity', [FrontController::class, 'activity']);
    Route::get('/deposit', [FrontController::class, 'depositform']);
    Route::post('/savedeposit', [FrontController::class, 'savedeposit']);

    Route::get('withdraw', [FrontController::class, 'withdraw']);
    Route::post('withdraw', [FrontController::class, 'create_withdraw']);

    Route::get('/profile/{id}', [FrontController::class, 'show']);
    Route::post('/dailytaskcomplate', [FrontController::class, 'dailytaskcomplate']);
    Route::get('/tree', [FrontController::class, 'tree']);
    Route::get('/transactions', [FrontController::class, 'transactions']);
    Route::get('/members', [FrontController::class, 'members']);

    Route::middleware('throttle:completetask')->get('task/completed', [FrontController::class, 'task_completed']);

    Route::get('logout', [FrontController::class, 'logout']);

});

Route::get('/blog', [FrontController::class, 'blog']);

// Route::get('/profiles/{id}', 'FrontController@show')->name('profiles.show');
Route::post('/store', [FrontController::class, 'save']);
Route::post('/loginpost', [FrontController::class, 'customLogin']);
  Route::get('/forget-password', [FrontController::class,'getEmail']);
  Route::POST('/forget-password', [FrontController::class, 'postEmail']);
    Route::get('/reset-password/{token}', [FrontController::class, 'getPassword']);
Route::POST('/reset-password', [FrontController::class, 'updatePassword']);
