<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;

class TaskController extends Controller
{
    public function welcome()
    {
        $tasks = Task::whereDate('task_date', Carbon::today())
            ->orderBy('task_date')
            ->orderBy('id')
            ->get();

        return view('welcome', compact('tasks'));
    }

    public function index()
    {
        $tasks = Task::orderBy('task_date')
            ->orderBy('id')
            ->get();

        return view('tasks', compact('tasks'));
    }

    public function profile()
    {
        $user = User::first();

        return view('profile', compact('user'));
    }

    public function about()
    {
        return view('about');
    }
}