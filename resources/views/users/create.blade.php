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
    >

    <label for="full_name">Full Name</label>
    <input
        type="text"
        id="full_name"
        name="full_name"
        value="{{ old('full_name') }}"
    >

    <button type="submit">Create User</button>
</form>

<a href="{{ route('users.index') }}">Back to Users</a>
@endsection