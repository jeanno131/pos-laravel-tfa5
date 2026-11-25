@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
<h1>Customer Accounts</h1>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('customers.create') }}">Create Customer</a>

<br><br>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->full_name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone ?: 'No phone provided' }}</td>

                <td>
                    <a href="{{ route('customers.edit', $customer) }}">
                        Edit
                    </a>

                    <form
                        method="POST"
                        action="{{ route('customers.destroy', $customer) }}"
                        style="display: inline;"
                    >
                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            onclick="return confirm('Delete this customer?')"
                        >
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No customers found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection