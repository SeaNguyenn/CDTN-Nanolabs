<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\api\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UserController::class)->group(function () {
    Route::post('/register', 'register');
});

Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/get-info', [Controllers\api\UserController::class, 'getInfo']);


    //product
    Route::post('/products', [Controllers\api\ProductController::class, 'getAllProducts']);
    Route::get('/product/{id}', [Controllers\api\ProductController::class, 'getProduct']);
    Route::get('/product/create', [Controllers\api\ProductController::class, 'createProduct']);
    Route::get('/product/update/{id}', [Controllers\api\ProductController::class, 'updateProduct']);
    Route::get('/product/delete/{id}', [Controllers\api\ProductController::class, 'deleteProduct']);

    //customers
});

