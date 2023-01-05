<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/',[UserController::class,'index']); 
Route::get('/create',[UserController::class,'create']); 
Route::post('/country',[UserController::class,'store'])->name('country');     
