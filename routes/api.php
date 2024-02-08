<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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



Route::get('/user', [ApiController::class, 'getUser']);
Route::post('/register', [ApiController::class, 'createUser']);
Route::get('/motor', [ApiController::class, 'getMotor']);
Route::get('/fren', [ApiController::class, 'getFren']);
Route::get('/kaporta', [ApiController::class, 'getKaporta']);
Route::get('/sanzıman', [ApiController::class, 'getSanz']);
