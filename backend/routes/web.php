<?php

use App\Http\Controllers\BeverageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[BeverageController::class,'index'])->name("home");
Route::get('/beverages/{id}',[BeverageController::class],'show')->name("beverages.show");
Route::get('beverages/packaging',[BeverageController::class,'packaging'])->name("beverages.packaging");
