@extends('layout')

@section('content')
    <h1>User Accounts</h1>

    <p>User records from a temporary static PHP array.</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['role'] }}</td>
                    <td>{{ $user['status'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection