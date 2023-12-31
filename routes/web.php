<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/create', [HomeController::class, 'create'])->name('home.create');
Route::post('/store', [HomeController::class, 'store'])->name('home.store');
Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('home.edit');
Route::post('/update/{id}', [HomeController::class, 'update'])->name('home.update');
Route::get('/delete/{id}', [HomeController::class, 'delete'])->name('home.delete');
