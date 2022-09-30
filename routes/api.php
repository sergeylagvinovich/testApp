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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get("/users",[\App\Http\Controllers\ApiController::class,"getUsers"]);
Route::get("/users/departments",[\App\Http\Controllers\ApiController::class,"getDepartmentsForUsers"]);
Route::get("/users/{id}",[\App\Http\Controllers\ApiController::class,"getUser"]);


Route::get("/departments",[\App\Http\Controllers\ApiController::class,"getDepartments"]);
Route::get("/departments/{id}",[\App\Http\Controllers\ApiController::class,"getDepartment"]);
