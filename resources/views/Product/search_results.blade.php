@extends('layouts.user_layout')

@section('searchproduct')
<div class="container mt-4">

    {{-- Show warning message for empty query or no match --}}
    @if(isset($oops))
        <div class="alert alert-warning">{{ $oops }}</div>
    @endif

    {{-- Heading if query exists --}}
    @if(!empty($query))
        <h4 class="mb-4">Search Results for: <span class="text-primary">"{{ $query }}"</span></h4>
    @endif

    <div class="row">
        @forelse($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-4 position-relative">

                    <!-- Sale Badge -->
                    <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 rounded-circle d-flex align-items-center justify-content-center"
                          style="width: 40px; height: 40px; font-size: 0.9rem;">
                        Sale
                    </span>

                    <!-- Product Image -->
                    @if($product->image)
                        <img src="{{ asset('images/' . $product->image) }}" class="card-img-top rounded-top-4"
                             style="height: 230px; object-fit: cover;" alt="{{ $product->name }}">
                    @else
                        <img src="{{ asset('images/default.png') }}" class="card-img-top rounded-top-4" alt="No Image">
                    @endif

                    <div class="card-body text-center d-flex flex-column">

                        <!-- Product Name -->
                        <h6 class="fw-bold mb-1" style="color: #1A1A1A;">
                            {{ $product->name }}
                        </h6>

                        <!-- Original Price -->
                        <p class="text-muted mb-0" style="text-decoration: line-through;">
                            Rs.{{ number_format($product->price + 300) }}
                        </p>

                        <!-- Sale Price -->
                        <p class="text-danger fw-bold fs-5 mb-2">
                            Rs.{{ number_format($product->price) }}
                        </p>

                        <!-- Description -->
                        <p class="text-muted small">{{ Str::limit($product->description, 60) }}</p>

                        <!-- Availability Indicator -->
                        <span class="align-middle">
                            <span class="d-inline-block rounded-circle me-1"
                                  style="width: 14px; height: 14px; vertical-align: middle; background-color: {{ $product->available === 'In Stock' ? '#28a745' : '#dc3545' }};">
                            </span>
                            <span class="text-muted small align-middle">
                                {{ ucfirst($product->available) }}
                            </span>
                        </span>

                        <!-- Add to Cart -->
                        <a href="#" class="btn mt-auto rounded-pill fw-semibold"
                           style="background-color: #1A1A1A; color: white;">
                            ADD TO CART
                        </a>
                    </div>
                </div>
            </div>
        @empty
            {{-- Extra fallback if no product --}}
            @if(!isset($oops)) {{-- Don't show this if already showing an error --}}
                <div class="col-12">
                    <div class="alert alert-info">No products found.</div>
                </div>
            @endif
        @endforelse
    </div>
</div>
@endsection
