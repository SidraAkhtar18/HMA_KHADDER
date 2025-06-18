@extends('layouts.user_layout')

@section('cat2content')
<div class="container">
    <h2 class="mb-4">Sale 60% off</h2>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                       @if($product->image)
                    <a href="{{ route('product.details', $product->id) }}">
                        <img src="{{ asset('images/' . $product->image) }}" class="card-img-top rounded-top-4" style="height: 230px; object-fit: cover;" alt="{{ $product->name }}">
                    </a>
                    @else
                    <a href="{{ route('product.details', $product->id) }}">
                        <img src="{{ asset('images/default.png') }}" class="card-img-top rounded-top-4" alt="No Image">
                    </a>
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-success"><strong>${{ $product->price }}</strong></p>
                        <p class="card-text">{{ Str::limit($product->description, 60) }}</p>
                        <a href="#" class="btn btn-primary mt-auto">Add to Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
