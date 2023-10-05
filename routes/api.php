<?php

use App\Http\Controllers\GadoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/gados', [GadoController::class,'index']);
Route::get('/gados/{id}', [GadoController::class,'show']);
Route::post('/gados', [GadoController::class,'store']);
Route::put('/gados/{id}', [GadoController::class,'update']);
Route::delete('/gados/{id}', [GadoController::class,'destroy']);
