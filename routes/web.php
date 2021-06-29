<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DicasController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;



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

//Routes de auth
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('cadastro', [UserController::class,'index'])->name('cadastro');
    Route::post('cadastro-store', [UserController::class,'store'])->name('cadastro.store');




    

});

//Routes do sistema
Route::prefix('admin/')->name('admin.')->middleware("auth:web")->group(function () {

    Route::get('/', [DicasController::class, 'index'])->name('home');


    Route::resource('dica', DicasController::class);


});

//Route do site
Route::get('/', [SiteController::class, 'index'])->name('site');