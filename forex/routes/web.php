<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForexController;
use App\Http\Controllers\AdminController;
// use App\Http\Controllers\;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('', [ForexController::class, 'last_update']);
// Route::get('dashboard', [ForexController::class, 'index'])->middleware('auth');
Route::get('dashboard', [ForexController::class, 'index'])->middleware('auth','loginverify');
Route::get('test', [ForexController::class, 'test']);
Route::get('create-buy-order', [ForexController::class, 'start_buy_order'])->name('start_buy_order'); 
Route::get('deposit', [ForexController::class, 'deposit_page'])->middleware('auth');
Route::get('withdraw', [ForexController::class, 'withdraw_page'])->middleware('auth');


Route::put('update/{resourceId}', [ForexController::class, 'close_trade'])->name('update'); 

Route::post('process-trade', [ForexController::class, 'process_trade'])->name('process_trade'); 

Route::post('make-withdraw', [ForexController::class, 'make_withdraw'])->name('make_withdraw'); 


Route::get('change-login', [ForexController::class, 'auth_page']); 

Route::post('change-auth', [ForexController::class, 'change_auth'])->name('change_auth'); 

Route::post('upload-deposit', [ForexController::class, 'UploadDocuments'])->name('UploadDocuments'); 



Route::get('admin', [AdminController::class, 'index'])->middleware(['can:isAdmin','auth']); 
Route::get('Users', [AdminController::class, 'users'])->middleware(['can:isAdmin','auth']); 
Route::get('edit-users/{id}', [AdminController::class, 'users_edit'])->middleware(['can:isAdmin','auth']); 

Route::get('Close-orders', [AdminController::class, 'close'])->middleware(['can:isAdmin','auth']); 
Route::get('Live-orders', [AdminController::class, 'orders'])->middleware(['can:isAdmin','auth']); 
Route::get('change-price/{id}', [AdminController::class, 'change'])->middleware(['can:isAdmin','auth']); 
Route::put('update-price', [AdminController::class, 'update_order'])->name('update_price')->middleware(['can:isAdmin','auth']); 
Route::put('update-users', [AdminController::class, 'update_user'])->name('update_user')->middleware(['can:isAdmin','auth']); 
Route::get('delete-user/{id}', [AdminController::class, 'delete'])->middleware(['can:isAdmin','auth']); 
Route::get('admin-deposit', [AdminController::class, 'ViewDoc'])->middleware(['can:isAdmin','auth']); 
Route::get('view-document/{id}', [AdminController::class, 'ViewDeposit'])->middleware(['can:isAdmin','auth']); 



Route::get('login-verify', [AuthController::class, 'loginPage']); 
Route::post('loginVerify', [AuthController::class, 'loginotp'])->name('loginotp'); 


Route::get('Admin-Withdraw', [AdminController::class, 'withdraw'])->middleware(['can:isAdmin','auth']); 
Route::get('Admin-Withdraw-Edit/{id}', [AdminController::class, 'withdraw_edit'])->middleware(['can:isAdmin','auth']); 


















// Route::get('', [AuthController::class, 'index'])->name('login');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');