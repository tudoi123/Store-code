<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactAdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/product', ProductController::class);
Route::resource('/productuser', ProductUserController::class);

Route::resource('/contact', ContactController::class);
Route::resource('/contactadmin', ContactAdminController::class);

Route::resource('/about', AboutController::class);


Route::group(['middleware' => 'guest'], function (){

    Route::get('/register', [AuthController::class, 'register'])->name('register'); 
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

});

Route::group(['middleware' => 'auth'], function (){

    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

});

Route::resource('admin', AdminController::class);



