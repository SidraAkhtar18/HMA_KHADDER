@extends('layouts.user_layout')

@section('cat5content')
<div class="container">
    <h2 class="mb-4">Plain Collection Khadder</h2>

    <p class="mb-4">
        Plain Khadder is a traditional handwoven fabric known for its durability, comfort, and breathability. Ideal for both summer and winter wear, it offers a simple yet elegant look, making it a popular choice for everyday clothing.
    </p>

    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 position-relative">
                    <a href="{{ route('product.details', $product->id) }}">
                        @if($product->image)
                            <img src="{{ asset('images/' . $product->image) }}"
                                 class="card-img-top rounded-top-4"
                                 style="height: 230px; object-fit: cover;"
                                 alt="{{ $product->name }}">
                        @else
                            <img src="{{ asset('images/default.png') }}"
                                 class="card-img-top rounded-top-4"
                                 alt="No Image">
                        @endif
                    </a>
                    <div class="card-body text-center d-flex flex-column">
                        <h6 class="fw-bold mb-1" style="color: #1A1A1A;">
                            {{ $product->name }}
                        </h6>

           
                        <p class="text-muted mb-0" style="text-decoration: line-through;">
                            Rs.{{ number_format($product->price + 300) }}
                        </p>
                        <p class="text-danger fw-bold fs-5 mb-2">
                            Rs.{{ number_format($product->price) }}
                        </p>

               
                        <p class="text-muted small">{{ Str::limit($product->description, 60) }}</p>

                         <div class="detail-row">
                            <div class="product-label">Quantity:</div>
                            <div class="product-value">{{ $product->quantity }}</div>
                        </div>

                        <span class="align-middle">
                            <span class="d-inline-block rounded-circle me-1"
                                  style="width: 14px; height: 14px; vertical-align: middle; background-color: {{ $product->available === 'In Stock' ? '#28a745' : '#dc3545' }};">
                            </span>
                            <span class="text-muted small align-middle">
                                {{ ucfirst($product->available) }}
                            </span>
                        </span>

                       
                        <form method="POST" action="{{ route('cart.add', $product->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
