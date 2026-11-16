@extends('layout')

@section('content')
    <h1>All Tasks</h1>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    @auth
        <a href="{{ route('tasks.create') }}">
            Create New Task
        </a>

        <br><br>
    @endauth

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Status</th>
                <th>Task Date</th>

                @auth
                    <th>Actions</th>
                @endauth
            </tr>
        </thead>

        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>

                    <td>
                        @if ($task->status === 'done')
                            <span style="color: green;">
                                Done
                            </span>
                        @else
                            <span style="color: orange;">
                                Pending
                            </span>
                        @endif
                    </td>

                    <td>
                        {{ $task->task_date->format('F d, Y') }}
                    </td>

                    @auth
                        <td>
                            <a href="{{ route('tasks.edit', $task) }}">
                                Edit
                            </a>

                            <form
                                method="POST"
                                action="{{ route('tasks.destroy', $task) }}"
                                style="display: inline;"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    onclick="return confirm('Archive this task?')"
                                >
                                    Archive
                                </button>
                            </form>
                        </td>
                    @endauth
                </tr>
            @empty
                <tr>
                    <td colspan="5">
                        No active tasks found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection