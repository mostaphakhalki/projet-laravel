<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::get('/home', action: ['\App\Http\Controllers\homeController','index']);
Route::get('/', [\App\Http\Controllers\userControler::class, 'index'])->name('pageHome');

Route::get('/profiles', [\App\Http\Controllers\profileController::class, 'index'])->name('profiles.index');

Route::get('/profiles/{id}', [\App\Http\Controllers\profileController::class, 'show'])
->where('id','\d+')
->name('profiles.show');


Route::get('/information', action: [\App\Http\Controllers\informationController::class,'index'])->name('information.index');


