@extends('layouts.user_layout')

@section('productdetails')
<style>
    .zoom-container {
        overflow: hidden;
        border-radius: 1rem;
    }

    .zoom-image {
        transition: transform 0.5s ease;
    }

    .zoom-container:hover .zoom-image {
        transform: scale(1.08);
    }

    .product-label {
        font-weight: 600;
        color: #1a1a1a;
        min-width: 150px;
    }

    .product-value {
        color: #555;
    }

    .detail-row {
        margin-bottom: 1rem;
        display: flex;
        flex-wrap: wrap;
    }
</style>

<div class="container py-5">
    <div class="row align-items-start justify-content-center g-4">

        <!-- Product Image -->
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="zoom-container shadow rounded-4 border p-3 bg-white">
                <img src="{{ asset('images/' . $product->image) }}"
                     alt="{{ $product->name }}"
                     class="img-fluid zoom-image w-100"
                     style="max-height: 500px; object-fit: cover;">
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="p-3 bg-white rounded-4 shadow-sm border">

                <h3 class="fw-bold mb-4 text-dark text-center">Product Details</h3>

                <!-- Product Name -->
                <div class="detail-row">
                    <div class="product-label">Product Name:</div>
                    <div class="product-value">{{ $product->name }}</div>
                </div>

                <!-- Price -->
                <div class="detail-row">
                    <div class="product-label">Original Price:</div>
                    <div class="product-value text-decoration-line-through">Rs.{{ number_format($product->price + 300) }}</div>
                </div>

                <div class="detail-row">
                    <div class="product-label">Discounted Price:</div>
                    <div class="product-value text-danger fw-bold">Rs.{{ number_format($product->price) }}</div>
                </div>

                <!-- Description -->
                <div class="detail-row">
                    <div class="product-label">Description:</div>
                    <div class="product-value">{{ $product->description }}</div>
                </div>

                <!-- Stock -->
                <div class="detail-row">
                    <div class="product-label">Availability:</div>
                    <div class="product-value">
                        <span class="badge {{ $product->available === 'In Stock' ? 'bg-success' : 'bg-danger' }}">
                            {{ $product->available }}
                        </span>
                    </div>
                </div>

                <!-- Add to Cart -->
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-primary btn-lg rounded-pill px-5 py-2 " >Add to Cart</a>
                </div>

                <!-- Back -->
                <div class="mt-4 text-center">
                    <a href="{{ url()->previous() }}" class="btn btn-primary btn-lg rounded-pill px-5 py-2 ">
                        Back to Category
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
