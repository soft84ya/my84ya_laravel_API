<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;



Route::post('authenticate', [AuthenticationController::class, 'authenticate']);

Route::group(['middleware' => ['auth:sanctum']],function(){

    //Protected Routes
Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('logout', [AuthenticationController::class, 'logout']);


});
