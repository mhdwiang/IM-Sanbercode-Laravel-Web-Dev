<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CastController;

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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/biodata', [DashboardController::class, 'daftar']);

Route::post('/home', [DashboardController::class, 'home']);

Route::get('/table', function(){
    return view('table');
});

Route::get('/data-table', function(){
    return view('data-table');
});

Route::get('/cast/create', [CastController::class, 'create']);

Route::post('/cast', [CastController::class, 'store']);

Route::get('cast', [CastController::class, 'index']);

Route::get('cast/{id}', [CastController::class, 'show']);

Route::get('/cast/{id}/edit', [CastController::class, 'edit']);

Route::put('/cast/{id}', [CastController::class, 'update']);

Route::delete('/cast/{id}', [CastController::class, 'destroy']);