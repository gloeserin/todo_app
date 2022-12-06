<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\LoginController;

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
// mengelompokkan route-route yang akan diberi hak akses 'isGuest'
Route::middleware('isGuest')->group(function () {
    Route::get('/', [TodoController::class, 'index']);
    Route::post('/login', [LoginController::class, 'login'])->name('Login-baru');
    Route::get('/register', [TodoController::class, 'register'])->name('action login'); 
    Route::post('/register', [RegisterController::class, 'register']);
});


Route::middleware('isLogin')->group(function () {
    Route::get('/dashboard', [TodoController::class, 'dashboard'])->name
    ('dashboard');
    Route::get('/create', [TodoController::class, 'create'])->name
    ('create');
    Route::post('/store', [TodoController::class, 'store'])->name
    ('store');
    Route::get('/data', [TodoController::class, 'data'])->name
    ('data');
    Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edit');
    //method route buat update data itu pakai patch/put
    Route::patch('/update/{id}', [TodoController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [TodoController::class, 'destroy'])->name('destroy');
    Route::patch('/complated/{id}', [TodoController::class,
    'updateToComplated'])->name('update-complated');
});

Route::get('/logout', [LoginController::class, 'logout'])->name
('logout');




// Route::get('/', [TodoController::class, 'index'])
// ->name('Login');  

