@extends('layout')

@section('content')
    <h1>User Accounts</h1>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('users.create') }}">
        Add User
    </a>

    <br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>

                    <td>
                        @if ($user->avatar)
                            <img
                                src="{{ asset('storage/' . $user->avatar) }}"
                                width="80"
                                height="80"
                                alt="Avatar of {{ $user->full_name }}"
                                style="object-fit: cover;"
                            >
                        @else
                            <img
                                src="{{ asset('images/avatar-placeholder.png') }}"
                                width="80"
                                height="80"
                                alt="Placeholder avatar"
                                style="object-fit: cover;"
                            >
                        @endif
                    </td>

                    <td>{{ $user->username }}</td>
                    <td>{{ $user->full_name }}</td>

                    <td>
                        <a href="{{ route('users.edit', $user) }}">
                            Edit
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">
                        No users found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection