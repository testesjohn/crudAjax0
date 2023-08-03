<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
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

Route::get('/', [PersonController::class, 'index'])->name('home');
Route::get('/create', [PersonController::class, 'create'])->name('create');
Route::post('/store', [PersonController::class, 'store'])->name('store');
Route::get('/edit/{person}', [PersonController::class, 'edit'])->name('edit');
Route::put('/update/{person}', [PersonController::class, 'update'])->name('update');
Route::delete('/destroy/{person}', [PersonController::class, 'destroy'])->name('destroy');



