<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//login
Route::post('/login',[\App\Http\Controllers\UserController::class,'login']);
//register
Route::post('/register',[\App\Http\Controllers\UserController::class,'register']);
//CategoryAll
Route::get('/categoryAll',[\App\Http\Controllers\CategoryController::class,'CategoryAll']);
//productByCategory
Route::get('/product/{id}',[\App\Http\Controllers\ProductController::class,'getItemByCategory']);
//productID
Route::get('/description/{id}',[\App\Http\Controllers\ProductController::class,'description']);
//search
Route::get('/search',[\App\Http\Controllers\CategoryController::class,'search']);
//account
Route::get('/account_profile',[\App\Http\Controllers\UserController::class,'getAccountProfile'])->middleware('auth:sanctum');
//change
Route::put('/user',[\App\Http\Controllers\UserController::class,'change']);


