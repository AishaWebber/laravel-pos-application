@extends('layout')

@section('content')
    <h1>Edit Task</h1>

    @if ($errors->any())
        <div style="color: red;">
            <strong>Please fix the following errors:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('tasks.update', $task) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Task Title:</label>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $task->title) }}"
            >
        </div>

        <br>

        <div>
            <label for="status">Status:</label>

            <select id="status" name="status">
                <option
                    value="pending"
                    {{ old('status', $task->status) === 'pending' ? 'selected' : '' }}
                >
                    Pending
                </option>

                <option
                    value="done"
                    {{ old('status', $task->status) === 'done' ? 'selected' : '' }}
                >
                    Done
                </option>
            </select>
        </div>

        <br>

        <div>
            <label for="task_date">Task Date:</label>

            <input
                type="date"
                id="task_date"
                name="task_date"
                value="{{ old('task_date', $task->task_date?->format('Y-m-d')) }}"
            >
        </div>

        <br>

        <button type="submit">
            Update Task
        </button>

        <a href="{{ route('tasks.index') }}">
            Cancel
        </a>
    </form>
@endsection