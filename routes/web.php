<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;



Route::get('/', [RegisterController::class,'index'])->name('index');
Route::post('/', [RegisterController::class,'create'])->name('create');
Route::get('/edit/{id}', [RegisterController::class,'edit'])->name('edit');
Route::post('/edit/{id}', [RegisterController::class,'update'])->name('update');
Route::get('/delete/{id}', [RegisterController::class,'destroy'])->name('destroy');



