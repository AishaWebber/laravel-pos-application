@extends('layout')

@section('content')

    <h1>Complete Task List</h1>

    <p>All tasks in the system</p>

    @forelse ($tasks as $task)

        <div class="task">
            <h3>{{ $task->title }}</h3>

            <p>
                Status:
                <span class="{{ $task->status }}">
                    {{ ucfirst($task->status) }}
                </span>
            </p>

            <p>
                Date:
                {{ $task->task_date->format('F d, Y') }}
            </p>
        </div>

    @empty

        <p>No tasks found.</p>

    @endforelse

@endsection