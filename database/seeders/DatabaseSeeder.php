<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'cristine',
            'full_name' => 'Cristine Joy Mendoza',
            'email' => 'cristine@example.com',
        ]);

        Task::create([
            'title' => 'Review Laravel migration concepts',
            'status' => 'pending',
            'task_date' => Carbon::today(),
        ]);

        Task::create([
            'title' => 'Create Eloquent models',
            'status' => 'completed',
            'task_date' => Carbon::today(),
        ]);

        Task::create([
            'title' => 'Build the Welcome page',
            'status' => 'pending',
            'task_date' => Carbon::today(),
        ]);

        Task::create([
            'title' => 'Study Blade templates',
            'status' => 'pending',
            'task_date' => Carbon::tomorrow(),
        ]);

        Task::create([
            'title' => 'Practice Laravel routing',
            'status' => 'completed',
            'task_date' => Carbon::tomorrow(),
        ]);

        Task::create([
            'title' => 'Review database relationships',
            'status' => 'pending',
            'task_date' => Carbon::yesterday(),
        ]);

        Task::create([
            'title' => 'Test the task list page',
            'status' => 'pending',
            'task_date' => Carbon::yesterday(),
        ]);

        Task::create([
            'title' => 'Prepare project documentation',
            'status' => 'completed',
            'task_date' => Carbon::today()->addDays(2),
        ]);
    }
}