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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Lot', 'prefix' => 'lots'], function(){
    Route::get('/', [App\Http\Controllers\LotsController::class, 'index'])->name('lots');
    Route::get('/create', [App\Http\Controllers\LotsController::class, 'create'])->name('lots.create');
    Route::post('/', [App\Http\Controllers\LotsController::class, 'store'])->name('lots.store');
    Route::get('/{lot}', [App\Http\Controllers\LotsController::class, 'show'])->name('lots.show');
    Route::get('/{lot}/edit', [App\Http\Controllers\LotsController::class, 'edit'])->name('lots.edit');
    Route::patch('/{lot}', [App\Http\Controllers\LotsController::class, 'update'])->name('lots.update');
    Route::delete('/{lot}', [App\Http\Controllers\LotsController::class, 'delete'])->name('lots.delete');
});

Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function(){
    Route::get('/', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
    Route::get('/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
    Route::post('/', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{category}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');
    Route::get('/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
    Route::patch('/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{category}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('categories.delete');
});