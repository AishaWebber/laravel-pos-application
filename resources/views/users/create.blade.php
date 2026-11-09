@extends('layout')

@section('content')
    <h1>Create User Account</h1>

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

    <form method="POST" action="{{ route('users.store') }}">
        @csrf

        <div>
            <label for="username">Username:</label>

            <input
                type="text"
                id="username"
                name="username"
                value="{{ old('username') }}"
            >
        </div>

        <br>

        <div>
            <label for="full_name">Full Name:</label>

            <input
                type="text"
                id="full_name"
                name="full_name"
                value="{{ old('full_name') }}"
            >
        </div>

        <br>

        <button type="submit">Save User</button>

        <a href="{{ route('users.index') }}">
            Cancel
        </a>
    </form>
@endsection
