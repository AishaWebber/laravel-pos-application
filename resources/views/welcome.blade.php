@extends('layout')

@section('content')

    <h1>Tasks for Today</h1>

    <p>
        Tasks scheduled for {{ now()->format('F d, Y') }}
    </p>

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

        <p>No tasks are scheduled for today.</p>

    @endforelse

@endsection