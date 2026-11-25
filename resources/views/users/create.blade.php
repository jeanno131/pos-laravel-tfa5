@extends('layouts.app')

@section('title', 'Create User')

@section('content')
<h1>Create User</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('users.store') }}">
    @csrf

    <label for="username">Username</label>
    <input
        type="text"
        id="username"
        name="username"
        value="{{ old('username') }}"
        required
    >

    <br><br>

    <label for="full_name">Full Name</label>
    <input
        type="text"
        id="full_name"
        name="full_name"
        value="{{ old('full_name') }}"
        required
    >

    <br><br>

    <label for="password">Password</label>
    <input
        type="password"
        id="password"
        name="password"
        required
    >

    <br><br>

    <label for="password_confirmation">Confirm Password</label>
    <input
        type="password"
        id="password_confirmation"
        name="password_confirmation"
        required
    >

    <br><br>

    <button type="submit">Create User</button>
</form>

<br>

<a href="{{ route('users.index') }}">Back to Users</a>
@endsection