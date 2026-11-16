@extends('layout')

@section('content')
    <h1>Create Task</h1>

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

    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf

        <div>
            <label for="title">Task Title:</label>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
            >
        </div>

        <br>

        <div>
            <label for="status">Status:</label>

            <select id="status" name="status">
                <option value="pending" {{ old('status') === 'pending' ? 'selected' : '' }}>
                    Pending
                </option>

                <option value="done" {{ old('status') === 'done' ? 'selected' : '' }}>
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
                value="{{ old('task_date') }}"
            >
        </div>

        <br>

        <button type="submit">
            Save Task
        </button>

        <a href="{{ route('tasks.index') }}">
            Cancel
        </a>
    </form>
@endsection