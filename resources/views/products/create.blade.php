@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
<h1>Create Product</h1>

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

<form
    method="POST"
    action="{{ route('products.store') }}"
    enctype="multipart/form-data"
>
    @csrf

    <label for="name">Product Name</label>
    <input
        type="text"
        id="name"
        name="name"
        value="{{ old('name') }}"
        required
    >

    <br><br>

    <label for="price">Price</label>
    <input
        type="number"
        id="price"
        name="price"
        value="{{ old('price') }}"
        min="0"
        step="0.01"
        required
    >

    <br><br>

    <label for="stock_quantity">Stock Quantity</label>
    <input
        type="number"
        id="stock_quantity"
        name="stock_quantity"
        value="{{ old('stock_quantity', 0) }}"
        min="0"
        required
    >

    <br><br>

    <label for="image">Product Image</label>
    <input
        type="file"
        id="image"
        name="image"
        accept=".jpg,.jpeg,.png,.webp"
    >

    <br><br>

    <button type="submit">Create Product</button>
</form>

<br>

<a href="{{ route('products.index') }}">Back to Products</a>
@endsection