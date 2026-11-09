<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'welcome'])
    ->name('welcome');

Route::get('/tasks', [TaskController::class, 'index'])
    ->name('tasks.index');

Route::get('/profile', [TaskController::class, 'profile'])
    ->name('profile');

Route::get('/about', [TaskController::class, 'about'])
    ->name('about');

/*
|--------------------------------------------------------------------------
| Customer Routes
|--------------------------------------------------------------------------
*/

Route::resource('customers', CustomerController::class)
    ->only([
        'index',
        'create',
        'store',
        'edit',
        'update',
    ]);

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::resource('users', UserController::class)
    ->only([
        'index',
        'create',
        'store',
        'edit',
        'update',
    ]);