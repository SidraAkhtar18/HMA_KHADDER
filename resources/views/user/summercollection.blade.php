@extends('layouts.user_layout')
@section('cat3content')
<div class="container">
    <h2 class="mb-4">Summer Collection Khaddar</h2>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 position-relative">
                    <!-- Sale Circle Badge -->
                    <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 rounded-circle d-flex align-items-center justify-content-center"
                          style="width: 40px; height: 40px; font-size: 0.9rem;">
                        Sale
                    </span>
                    <!-- Image -->
                       @if($product->image)
                    <a href="{{ route('product.details', $product->id) }}">
                        <img src="{{ asset('images/' . $product->image) }}" class="card-img-top rounded-top-4" style="height: 230px; object-fit: cover;" alt="{{ $product->name }}">
                    </a>
                    @else
                    <a href="{{ route('product.details', $product->id) }}">
                        <img src="{{ asset('images/default.png') }}" class="card-img-top rounded-top-4" alt="No Image">
                    </a>
                    @endif

                    <div class="card-body text-center d-flex flex-column">

                        <!-- Product Name -->
                        <h6 class="fw-bold mb-1" style="color: #1A1A1A;">
                            {{ $product->name }}
                        </h6>

                        <!-- Product Price -->
                        <p class="text-muted mb-0" style="text-decoration: line-through;">
                            Rs.{{ number_format($product->price + 300) }}
                        </p>
                        <p class="text-danger fw-bold fs-5 mb-2">
                            Rs.{{ number_format($product->price) }}
                        </p>
                       <!-- Description -->
                        <p class="text-muted small">{{ Str::limit($product->description, 60) }}</p>
                        <span class="align-middle">
                            <span class="d-inline-block rounded-circle me-1"
                                  style="width: 14px; height: 14px; vertical-align: middle; background-color: {{ $product->available === 'In Stock' ? '#28a745' : '#dc3545' }};">
                            </span>
                            <span class="text-muted small align-middle">
                                {{ ucfirst($product->available) }}
                            </span>
                        </span>

                        <a href="#" class="btn mt-auto rounded-pill fw-semibold"
                           style="background-color: #1A1A1A; color: white;">
                            ADD TO CART
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
