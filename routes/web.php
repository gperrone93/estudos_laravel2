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


Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

Route::get('/task/new', [\App\Http\Controllers\TaskController::class, 'create'])->middleware('auth')->name('task.create');
Route::post('/task/create_action', [\App\Http\Controllers\TaskController::class, 'create_action'])->middleware('auth')->name('task.create_action');
Route::post('/task/edit_action', [\App\Http\Controllers\TaskController::class, 'edit_action'])->middleware('auth')->name('task.edit_action');
Route::get('/task/edit', [\App\Http\Controllers\TaskController::class, 'edit'])->middleware('auth')->name('task.edit');
Route::get('/task/delete', [\App\Http\Controllers\TaskController::class, 'delete'])->middleware('auth')->name('task.delete');
Route::get('/task', [\App\Http\Controllers\TaskController::class, 'index'])->middleware('auth')->name('task.view');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::post('/task/update', [\App\Http\Controllers\TaskController::class, 'update'])->name('task.update');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login_action'])->name('user.login_action');
Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register_action'])->name('user.register_action');

