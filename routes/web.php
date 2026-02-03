<?php

use App\Http\Controllers\Panel\CategoryController;
use App\Http\Requests\Panel\AuthController;
use Illuminate\Support\Facades\Route;

//dd(\Illuminate\Support\Facades\Hash::make('shop2015'));
Route::middleware('auth')->group(function (){
    Route::get('/',[ CategoryController::class,'index'])
        ->name('admin-panel');

    Route::get('/logout',[AuthController::class,'logout'])
        ->name('logout');
});

Route::get('/categories/{category}', function () {
    return view('index');
})->middleware('auth:sanctum');

Route::get('/login',[AuthController::class,'login'])
    ->name('login');

Route::post('/loginSend',[AuthController::class,'loginSend'])
    ->name('login.send');

