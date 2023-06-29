<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserTasksController;
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

Route::controller(UserTasksController::class)->group(function () {
    Route::get('/userTasks', 'index');
    Route::post('/userTask', 'store');
    Route::get('/userTask/{id}', 'show');
    Route::patch('/userTask', 'update');
    Route::delete('/userTask/{id}', 'destroy');
});
