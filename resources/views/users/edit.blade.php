@extends('layout')

@section('content')
    <h1>Edit User Account</h1>

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

    <form
        method="POST"
        action="{{ route('users.update', $user) }}"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        <div>
            <label for="username">Username:</label>

            <input
                type="text"
                id="username"
                name="username"
                value="{{ old('username', $user->username) }}"
            >
        </div>

        <br>

        <div>
            <label for="full_name">Full Name:</label>

            <input
                type="text"
                id="full_name"
                name="full_name"
                value="{{ old('full_name', $user->full_name) }}"
            >
        </div>

        <br>

        <div>
            <label for="avatar">Profile Picture:</label>

            <input
                type="file"
                id="avatar"
                name="avatar"
                accept="image/*"
            >

            <small>Image file only, maximum size is 2 MB.</small>
        </div>

        <br>

        @if ($user->avatar)
            <div>
                <p>Current Avatar:</p>

                <img
                    src="{{ asset('storage/' . $user->avatar) }}"
                    width="120"
                    height="120"
                    alt="Avatar of {{ $user->full_name }}"
                    style="object-fit: cover;"
                >
            </div>

            <br>
        @endif

        <button type="submit">
            Update User
        </button>

        <a href="{{ route('users.index') }}">
            Cancel
        </a>
    </form>
@endsection