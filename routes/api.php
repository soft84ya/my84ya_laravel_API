<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\TempImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;



Route::post('authenticate', [AuthenticationController::class, 'authenticate']);

Route::group(['middleware' => ['auth:sanctum']],function(){

    //Protected Routes
Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('logout', [AuthenticationController::class, 'logout']);

//Service Routes
Route::post('services',[ServiceController::class,'store']);
Route::get('services',[ServiceController::class,'index']);
Route::put('services/{id}',[ServiceController::class,'update']);
Route::get('services/{id}',[ServiceController::class,'show']);
Route::delete('services/{id}',[ServiceController::class,'destroy']);

// Temp Image Routes
Route::post('temp-images',[TempImageController::class,'store']);
});
