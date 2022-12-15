<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserIdController;

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

Route::get('/books',[BookController::class,'index']); //shows data
Route::post('/books/',[BookController::class,'store']); //creates a new book
Route::put('/books/{id}',[BookController::class,'update']); //updates book
Route::delete('/books/{id}',[BookController::class,'destroy']); // deletes book 

Route::get('/users',[UserIdController::class,'index']); //shows data
Route::post('/users/',[UserIdController::class,'store']); //creates a new user
Route::put('/users/{id}',[UserIdController::class,'update']); //updates user
Route::delete('/users/{id}',[UserIdController::class,'destroy']); // deletes user