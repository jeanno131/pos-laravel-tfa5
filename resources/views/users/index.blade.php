@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
<h1>User Accounts</h1>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('users.create') }}">Create User</a>

<br><br>

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
        @forelse ($users as $user)
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

                    <form
                        method="POST"
                        action="{{ route('users.destroy', $user) }}"
                        style="display: inline;"
                    >
                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            onclick="return confirm('Delete this user?')"
                        >
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No users found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection