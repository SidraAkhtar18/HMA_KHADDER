@extends('layouts.user_layout')

@section('searchproduct')
<div class="container mt-4">
    <h3 class="mb-4">Search Products (Cutomer)</h3>
    {{-- Show error message if redirected back with error --}}
    @if(session('error'))
        <div class="alert alert-warning">
            {{ session('error') }}
        </div>
    @endif

    {{-- Display products --}}
    <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category ID</th>
                <th>Quantity</th>
                <th>Available</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->available }}</td>
                    <td>
                        @if($product->image)
                            <img src="{{ asset('images/' . $product->image) }}" alt="Image" width="80">
                        @else
                            No image
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
