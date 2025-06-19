@extends('layouts.admin_layout')

@section('listproductcontent') 
<div class="container mt-5">
    <h2 class="mb-4">Product Management</h2>    
    <h3>Product List</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price (Rs.)</th>
                 <th>Categories</th> 
                 <th>Quantity</th>
                <th>Edit</th>
                <th>Delete</th>
                 <th>Available</th>
                <th>Image</th>  
                          
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ number_format($product->price, 2) }}</td> 
                <td>{{ $product->category_id}}</td> 
                <td>{{ $product->quantity}}</td>      
                  <td>
                <form action="{{route('products.edit')}}" method="POST">
                @csrf
                <input type="hidden" name="edit" value="{{ $product->id }}">
                <button type="submit">Edit</button>
                </form>
            </td>
            <td>
                <form action="{{route('products.destroy')}}" method="POST">
                @csrf
                <input type="hidden" name="delete" value="{{ $product->id }}">
                <button type="submit">Delete</button>
                </form>
            </td>     
                <td>
                    @if($product->available == 'In Stock')
                        <span class="badge bg-success">In Stock</span>
                    @else
                        <span class="badge bg-danger">Out of Stock</span>
                    @endif
                <td>
                    @if($product->image)
                        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="img-thumbnail" style="max-width: 100px;">
                    @else
                        <span class="text-muted">No image</span>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center text-muted">No products available.</td>
            </tr>
            @endforelse

        </tbody>       
    </table>
</div>
@endsection
