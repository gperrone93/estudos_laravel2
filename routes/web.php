<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/task/new', [\App\Http\Controllers\TaskController::class, 'create'])->name('task.create');
Route::post('/task/create_action', [\App\Http\Controllers\TaskController::class, 'create_action'])->name('task.create_action');
Route::post('/task/edit_action', [\App\Http\Controllers\TaskController::class, 'edit_action'])->name('task.edit_action');
Route::get('/task/edit', [\App\Http\Controllers\TaskController::class, 'edit'])->name('task.edit');
Route::get('/task/delete', [\App\Http\Controllers\TaskController::class, 'delete'])->name('task.delete');
Route::get('/task', [\App\Http\Controllers\TaskController::class, 'index'])->name('task.view');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login_action'])->name('user.login_action');
Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register_action'])->name('user.register_action');

