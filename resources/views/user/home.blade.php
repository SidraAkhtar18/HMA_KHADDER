@extends('layouts.user_layout')

@section('content')
<div class="container mt-5">

    {{-- 🔶 Explore Categories Section --}}
    <div class="text-center mb-5">
       
        <div class="d-flex align-items-center justify-content-center my-3">
            <hr class="flex-grow-1 mx-2" style="border-top: 2px solid #333;">
            <h2 class="h4 text-uppercase text-muted">Shop by Category</h2>
            <hr class="flex-grow-1 mx-2" style="border-top: 2px solid #333;">
        </div>

        <div class="d-flex justify-content-center gap-4 flex-wrap">
            {{-- Category 1 --}}
            <a href="{{ url('/category/plain-khaddar') }}" class="text-decoration-none text-center">
            <img src="{{ asset('images/c1.jpeg') }}" class="rounded-circle img-fluid border border-2 p-1" alt="Category 1" style="width: 100px; height: 100px; object-fit: cover;">
            <p class="mt-2 text-muted">Plain Khaddar</p>
            </a>
            {{-- Category 2 --}}
            <a href="{{ url('/category/classic-khaddi-khaddar') }}" class="text-decoration-none text-center">
            <img src="{{ asset('images/c2.jpeg') }}" class="rounded-circle img-fluid border border-2 p-1" alt="Category 2" style="width: 100px; height: 100px; object-fit: cover;">
            <p class="mt-2 text-muted">Classic Khaddi Khaddar</p>
            </a>
        </div>

    </div>

    {{-- 🔷 Plain Premium Khaddar Section --}}
    <h3 class="mb-4 text-muted">Plain Premium Khaddar</h3>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-5">
        {{-- Product Card 1 --}}
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="position-relative">
                    <img src="{{ asset('images/f1.jpeg') }}" class="card-img-top" alt="Gulf Stream Khaddar">
                    <span class="badge bg-warning position-absolute top-0 start-0 m-2">Sale</span>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Plain Premium Khaddar - Gulf Stream</h5>
                    <p class="card-text text-decoration-line-through text-muted">Rs. 3,700.00</p>
                    <p class="card-text text-danger fw-bold">Rs. 2,999.00</p>
                    <button class="btn btn-dark w-100">ADD TO CART</button>
                </div>
            </div>
        </div>

        {{-- Product Card 2 --}}
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="position-relative">
                    <img src="{{ asset('images/f1.jpeg') }}" class="card-img-top" alt="Light Brown Khaddar">
                    <span class="badge bg-warning position-absolute top-0 start-0 m-2">Sale</span>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Plain Premium Khaddar - Light Brown</h5>
                    <p class="card-text text-decoration-line-through text-muted">Rs. 3,700.00</p>
                    <p class="card-text text-danger fw-bold">Rs. 2,999.00</p>
                    <button class="btn btn-dark w-100">ADD TO CART</button>
                </div>
            </div>
        </div>

        {{-- Product Card 3 --}}
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="position-relative">
                    <img src="{{ asset('images/f1.jpeg') }}" class="card-img-top" alt="Monte Carlo Khaddar">
                    <span class="badge bg-warning position-absolute top-0 start-0 m-2">Sale</span>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Plain Premium Khaddar - Monte Carlo</h5>
                    <p class="card-text text-decoration-line-through text-muted">Rs. 3,700.00</p>
                    <p class="card-text text-danger fw-bold">Rs. 2,999.00</p>
                    <button class="btn btn-dark w-100">ADD TO CART</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="position-relative">
                    <img src="{{ asset('images/f1.jpeg') }}" class="card-img-top" alt="Gulf Stream Khaddar">
                    <span class="badge bg-warning position-absolute top-0 start-0 m-2">Sale</span>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Plain Premium Khaddar - Gulf Stream</h5>
                    <p class="card-text text-decoration-line-through text-muted">Rs. 3,700.00</p>
                    <p class="card-text text-danger fw-bold">Rs. 2,999.00</p>
                    <button class="btn btn-dark w-100">ADD TO CART</button>
                </div>
            </div>
        </div>
    </div>

    {{-- 🔷 Classic Khaddi Khaddar Section --}}
    <h3 class="mb-4 text-muted">Classic Khaddi Khaddar</h3>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-5">
        {{-- Product Card 1 --}}
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="position-relative">
                    <img src="{{ asset('images/f1.jpeg') }}" class="card-img-top" alt="White Shade Khaddar">
                    <span class="badge bg-warning position-absolute top-0 start-0 m-2">Sale</span>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Classic Khaddi Khaddar - White Shade</h5>
                    <p class="card-text text-decoration-line-through text-muted">Rs. 2,100.00</p>
                    <p class="card-text text-danger fw-bold">Rs. 1,650.00</p>
                    <button class="btn btn-dark w-100">ADD TO CART</button>
                </div>
            </div>
        </div>

        {{-- Product Card 2 --}}
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="position-relative">
                    <img src="{{ asset('images/f1.jpeg') }}" class="card-img-top" alt="Dark Blue Khaddar">
                    <span class="badge bg-warning position-absolute top-0 start-0 m-2">Sale</span>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Classic Khaddi Khaddar - Dark Blue</h5>
                    <p class="card-text text-decoration-line-through text-muted">Rs. 2,100.00</p>
                    <p class="card-text text-danger fw-bold">Rs. 1,650.00</p>
                    <button class="btn btn-dark w-100">ADD TO CART</button>
                </div>
            </div>
        </div>

        {{-- Product Card 3 --}}
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="position-relative">
                    <img src="{{ asset('images/f1.jpeg') }}" class="card-img-top" alt="Brown Khaddar">
                    <span class="badge bg-warning position-absolute top-0 start-0 m-2">Sale</span>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Classic Khaddi Khaddar - Brown</h5>
                    <p class="card-text text-decoration-line-through text-muted">Rs. 2,100.00</p>
                    <p class="card-text text-danger fw-bold">Rs. 1,650.00</p>
                    <button class="btn btn-dark w-100">ADD TO CART</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="position-relative">
                    <img src="{{ asset('images/f1.jpeg') }}" class="card-img-top" alt="Gulf Stream Khaddar">
                    <span class="badge bg-warning position-absolute top-0 start-0 m-2">Sale</span>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Plain Premium Khaddar - Gulf Stream</h5>
                    <p class="card-text text-decoration-line-through text-muted">Rs. 3,700.00</p>
                    <p class="card-text text-danger fw-bold">Rs. 2,999.00</p>
                    <button class="btn btn-dark w-100">ADD TO CART</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
