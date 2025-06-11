@extends('layouts.user_layout')

@section('content')
<div class="container">
    <h2 class="mb-4">Sale 40% off</h2>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    @if($product->image)
                        <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    @else
                        <img src="{{ asset('images/default.png') }}" class="card-img-top" alt="No Image">
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
