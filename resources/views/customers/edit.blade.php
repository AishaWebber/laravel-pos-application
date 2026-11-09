@extends('layout')

@section('content')
    <h1>Edit Customer</h1>

    @if ($errors->any())
        <div>
            <strong>Please check the following errors:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('customers.update', $customer) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="full_name">Full Name:</label>
            <input
                type="text"
                id="full_name"
                name="full_name"
                value="{{ old('full_name', $customer->full_name) }}"
            >
        </div>

        <br>

        <div>
            <label for="email">Email:</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email', $customer->email) }}"
            >
        </div>

        <br>

        <button type="submit">Update Customer</button>
        <a href="{{ route('customers.index') }}">Cancel</a>
    </form>
@endsection