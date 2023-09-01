<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\PublisherController;
use App\Http\Controllers\Api\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something gclsreat!
|
*/


Route::post('register', RegisterController::class);
Route::post('login', LoginController::class);


Route::middleware('auth:sanctum')->group(function () {

    Route::post('logout', LogoutController::class);

    Route::apiResource('books', BookController::class)->only(['index', 'show']);

    Route::apiResource('authors', AuthorController::class)->only(['index', 'show']);

    Route::apiResource('publishers', PublisherController::class)->only(['index', 'show']);

    Route::apiResource('categories', CategoryController::class)->only(['index', 'show']);

    Route::get('/user', function () {  
        
        return auth()->user();
    });

});
