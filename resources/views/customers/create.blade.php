@extends('layouts.app')

@section('title', 'Create Customer')

@section('content')
<h1>Create Customer</h1>

@if ($errors->any())
    <div>
        <strong>Please correct the following errors:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('customers.store') }}">
    @csrf

    <label for="full_name">Full Name</label>
    <input
        type="text"
        id="full_name"
        name="full_name"
        value="{{ old('full_name') }}"
    >

    <label for="email">Email</label>
    <input
        type="email"
        id="email"
        name="email"
        value="{{ old('email') }}"
    >

    <label for="phone">Phone</label>
    <input
        type="text"
        id="phone"
        name="phone"
        value="{{ old('phone') }}"
    >

    <button type="submit">Create Customer</button>
</form>

<a href="{{ route('customers.index') }}">Back to Customers</a>
@endsection