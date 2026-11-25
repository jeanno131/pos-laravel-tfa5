@extends('layouts.app')

@section('title', 'Record Sale')

@section('content')
<h1>Record Sale</h1>

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

<form method="POST" action="{{ route('sales.store') }}">
    @csrf

    <label for="product_id">Product</label>

    <select name="product_id" id="product_id" required>
        <option value="">Select a product</option>

        @foreach ($products as $product)
            <option
                value="{{ $product->id }}"
                @selected(old('product_id') == $product->id)
            >
                {{ $product->name }}
                — ₱{{ number_format($product->price, 2) }}
                — Stock: {{ $product->stock_quantity }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label for="customer_id">Customer (Optional)</label>

    <select name="customer_id" id="customer_id">
        <option value="">Walk-in Customer</option>

        @foreach ($customers as $customer)
            <option
                value="{{ $customer->id }}"
                @selected(old('customer_id') == $customer->id)
            >
                {{ $customer->full_name }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label for="quantity">Quantity</label>

    <input
        type="number"
        id="quantity"
        name="quantity"
        value="{{ old('quantity', 1) }}"
        min="1"
        required
    >

    <br><br>

    <button type="submit">Record Sale</button>
</form>

<br>

<a href="{{ route('sales.index') }}">Back to Sales History</a>
@endsection