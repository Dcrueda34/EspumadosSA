<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;


use Illuminate\Support\Facades\Route;

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

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});


Auth::routes();

Route::resource('users', UserController::class);

Route::resource('roles', RoleController::class);


Route::get('download-pdf', [App\Http\Controllers\UserController::class, 'generarpdf'])->name('descargarpdf');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
