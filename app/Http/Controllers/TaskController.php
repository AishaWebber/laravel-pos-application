<?php

namespace App\Http\Controllers;

use App\Mail\TaskCompletedMail;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TaskController extends Controller
{
    public function welcome()
    {
        $tasks = Task::where('is_archived', false)
            ->whereDate('task_date', Carbon::today())
            ->orderBy('task_date')
            ->orderBy('id')
            ->get();

        return view('welcome', compact('tasks'));
    }

    public function index()
    {
        $tasks = Task::where('is_archived', false)
            ->orderBy('task_date')
            ->orderBy('id')
            ->get();

        return view('tasks', compact('tasks'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function about()
    {
        return view('about');
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'status' => ['required', 'in:pending,done'],
            'task_date' => ['required', 'date'],
        ]);

        $validated['is_archived'] = false;

        Task::create($validated);

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task created successfully.');
    }

    public function edit(Task $task)
    {
        abort_if($task->is_archived, 404);

        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        abort_if($task->is_archived, 404);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'status' => ['required', 'in:pending,done'],
            'task_date' => ['required', 'date'],
        ]);

        $wasAlreadyDone = $task->status === 'done';

        $task->update($validated);

        $isNowDone = $task->status === 'done';

        if (!$wasAlreadyDone && $isNowDone) {
            Mail::to(env('TASK_NOTIFICATION_EMAIL'))
                ->send(new TaskCompletedMail($task));
        }

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task updated successfully.');
    }

    public function destroy(Task $task)
    {
        abort_if($task->is_archived, 404);

        $task->is_archived = true;
        $task->save();

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task archived successfully.');
    }
}