<?php

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

Auth::routes();

Route::middleware(['auth', 'dashboard'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index']);
    Route::delete('/dashboard/{id}', [App\Http\Controllers\AdminController::class, 'deleteProduct'])->name('delete.product');
    Route::get('/dashboard/create', [App\Http\Controllers\AdminController::class, 'createProductIndex'])->name('create.product');
    Route::post('/dashboard/create', [App\Http\Controllers\AdminController::class, 'createProduct']);
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [\App\Http\Controllers\HomeController::class, 'singleProduct'])->name('single.product');
