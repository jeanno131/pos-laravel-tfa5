@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
<h1>User Accounts</h1>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('users.create') }}">Create User</a>

<table>
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
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>
                    @if ($user->avatar)
                        <img
                            src="{{ asset('storage/' . $user->avatar) }}"
                            alt="{{ $user->full_name }}"
                            width="80"
                            height="80"
                        >
                    @else
                        No avatar
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
        @endforeach
    </tbody>
</table>
@endsection