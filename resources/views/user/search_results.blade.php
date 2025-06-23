@extends('layouts.user_layout')

@section('usersearchcontent')
<div class="container mt-4">
    <h3 class="mb-4">Search Products (User)</h3>
    @if(isset($oops))
        <div class="alert alert-warning">{{ $oops }}</div>
    @endif
    @if(!empty($query))
        <h5>Results for "<strong>{{ $query }}</strong>"</h5>
    @endif

   <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>

                <th>Name</th>
                <th>Description</th>
                <th>Price (Rs.)</th>
                <th>Available</th>
                <th>Image</th>

            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr>

                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ number_format($product->price, 2) }}</td>

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
                        <td colspan="5" class="text-center">No products to show.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
