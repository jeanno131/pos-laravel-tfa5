@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<h1>Edit User</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST"
      action="{{ route('users.update', $user) }}"
      enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="username">Username</label>
    <input
        type="text"
        id="username"
        name="username"
        value="{{ old('username', $user->username) }}"
    >

    <label for="full_name">Full Name</label>
    <input
        type="text"
        id="full_name"
        name="full_name"
        value="{{ old('full_name', $user->full_name) }}"
    >

    <label for="avatar">Profile Picture</label>
    <input
        type="file"
        id="avatar"
        name="avatar"
        accept="image/*"
    >

    @if ($user->avatar)
        <p>Current avatar:</p>
        <img
            src="{{ asset('storage/' . $user->avatar) }}"
            alt="Current avatar"
            width="150"
        >
    @endif

    <button type="submit">Update User</button>
</form>

<a href="{{ route('users.index') }}">Back to Users</a>
@endsection