@extends('layout')

@section('content')
    <h1>Customer Accounts</h1>

    <p>Customer records from a temporary static PHP array.</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer['id'] }}</td>
                    <td>{{ $customer['name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                    <td>{{ $customer['phone'] }}</td>
                    <td>{{ $customer['address'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection