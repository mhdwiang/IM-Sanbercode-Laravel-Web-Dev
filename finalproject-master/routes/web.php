<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [IndexController::class, 'index']);

Route::middleware(['auth'])->group(function () {

//mengarah ke tambah
Route::get('/category/create', [CategoryController::class, 'create']);

//data tambah
Route::post('/category', [CategoryController::class, 'store']);

//read
Route::get('/category', [CategoryController::class, 'index']);

//menampilkan detail
Route::get('/category/{id}', [CategoryController::class, 'show']);

//mengarah ke update
Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);

//update
Route::put('/category/{id}', [CategoryController::class, 'update']);

//delete
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);
});

//profile
Route::resource('profile', ProfileController::class)->only(['index', 'update']);

//CRUD Question
Route::resource('question', QuestionController::class);
Auth::routes();
