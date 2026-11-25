@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<h1>Edit Product</h1>

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
    action="{{ route('products.update', $product) }}"
    enctype="multipart/form-data"
>
    @csrf
    @method('PUT')

    <label for="name">Product Name</label>
    <input
        type="text"
        id="name"
        name="name"
        value="{{ old('name', $product->name) }}"
        required
    >

    <br><br>

    <label for="price">Price</label>
    <input
        type="number"
        id="price"
        name="price"
        value="{{ old('price', $product->price) }}"
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
        value="{{ old('stock_quantity', $product->stock_quantity) }}"
        min="0"
        required
    >

    <br><br>

    @if ($product->image)
        <p>Current Image:</p>

        <img
            src="{{ asset('storage/' . $product->image) }}"
            alt="{{ $product->name }}"
            width="120"
        >

        <br><br>
    @endif

    <label for="image">Replace Image</label>
    <input
        type="file"
        id="image"
        name="image"
        accept=".jpg,.jpeg,.png,.webp"
    >

    <br><br>

    <button type="submit">Update Product</button>
</form>

<br>

<a href="{{ route('products.index') }}">Back to Products</a>
@endsection