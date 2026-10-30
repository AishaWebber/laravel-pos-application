<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'welcome'])->name('welcome');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

Route::get('/profile', [TaskController::class, 'profile'])->name('profile');

Route::get('/about', [TaskController::class, 'about'])->name('about');