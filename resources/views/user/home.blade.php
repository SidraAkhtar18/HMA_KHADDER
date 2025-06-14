@extends('layouts.user_layout')
@section('herocontent')
    <div class="container mid mb-4" style="margin-bottom: 20px; margin-top: 30px;">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <h1 class="display-4 fw-bold mb-3">Welcome to HMA Khadder</h1>
                <p class="lead mb-4">Discover premium quality Khadder fabrics for every season. Shop the latest collections and enjoy exclusive offers!</p>
                <a href="{{ route('category.products.show', ['category_id' => 1]) }}" class="btn btn-primary btn-lg">Shop Now</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/f2.jpg') }}" alt="Khadder Fabrics" class="img-fluid rounded shadow" style="height: 350px; width: 350px; object-fit: cover;">
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="container mt-5" style="margin-top: 20px;">
    {{-- 🔶 Explore Categories Section --}}
    <div class="text-center mb-5">

        <div class="d-flex align-items-center justify-content-center my-3">
            <hr class="flex-grow-1 mx-2" style="border-top: 2px solid #333;">
            <h2 class="h4 text-uppercase text-muted">Shop by Category</h2>
            <hr class="flex-grow-1 mx-2" style="border-top: 2px solid #333;">
        </div>
        <div class="d-flex justify-content-center gap-4 flex-wrap">
    {{-- Category 1 --}}
    <a href="{{ route('category.products.show', ['category_id' => 1]) }}" class="text-decoration-none text-center">
        <img src="{{ asset('images/c1.jpeg') }}" class="rounded-circle img-fluid border border-2 p-1" alt="Category 1" style="width: 100px; height: 100px; object-fit: cover;">
        <p class="mt-2 text-muted">Sale 1</p>
    </a>
    {{-- Category 2 --}}
    <a href="{{ route('category.products.show', ['category_id' => 2]) }}" class="text-decoration-none text-center">
        <img src="{{ asset('images/c2.jpeg') }}" class="rounded-circle img-fluid border border-2 p-1" alt="Category 2" style="width: 100px; height: 100px; object-fit: cover;">
        <p class="mt-2 text-muted">Sale 2</p>
    </a>
    </div>
</div>
@endsection
