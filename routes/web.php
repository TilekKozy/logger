<?php

use App\Http\Controllers\LoggerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('log', [LoggerController::class, 'log']);
Route::get('log-to/{type}', [LoggerController::class, 'logTo']);
Route::get('log-to-all', [LoggerController::class, 'logToAll']);
