@extends('layouts.app')

@section('title', 'Products')

@section('content')
<h1>Products</h1>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

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

<a href="{{ route('products.create') }}">Create Product</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock Quantity</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>

                <td>
                    @if ($product->image)
                        <img
                            src="{{ asset('storage/' . $product->image) }}"
                            alt="{{ $product->name }}"
                            width="80"
                        >
                    @else
                        No image
                    @endif
                </td>

                <td>{{ $product->name }}</td>
                <td>₱{{ number_format($product->price, 2) }}</td>
                <td>{{ $product->stock_quantity }}</td>

                <td>
                    <a href="{{ route('products.edit', $product) }}">
                        Edit
                    </a>

                    <form
                        method="POST"
                        action="{{ route('products.destroy', $product) }}"
                        style="display: inline;"
                    >
                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            onclick="return confirm('Delete this product?')"
                        >
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No products found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection