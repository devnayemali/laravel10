<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

// User Route 
Route::get('/user', [UserController::class, 'index'])->name('admin.users');
Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user', [UserController::class, 'store'])->name('users.store');

// Task Route
Route::get('/task', [TaskController::class, 'index'])->name('task');
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/{id}', [TaskController::class, 'show'])->name('task.show')->where('id', '[0-9]+');
Route::get('/task/{id}/edit', [TaskController::class, 'edit'])->name('task.edit')->where('id', '[0-9]+');




