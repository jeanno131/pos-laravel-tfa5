@extends('layouts.app')

@section('title', 'Sales History')

@section('content')
<h1>Sales History</h1>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('sales.create') }}">Record New Sale</a>

<br><br>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Customer</th>
            <th>Staff Member</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Date</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($sales as $sale)
            <tr>
                <td>{{ $sale->id }}</td>
                <td>{{ $sale->product->name }}</td>
                <td>{{ $sale->customer?->full_name ?? 'Walk-in Customer' }}</td>
                <td>
                    {{ $sale->user->full_name
                        ?? $sale->user->username
                        ?? $sale->user->email }}
                </td>
                <td>{{ $sale->quantity }}</td>
                <td>₱{{ number_format($sale->total_price, 2) }}</td>
                <td>{{ $sale->created_at->format('M d, Y h:i A') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="7">No sales recorded.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection