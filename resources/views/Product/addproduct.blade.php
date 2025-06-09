@extends('layouts.admin_layout')
@section('addproductcontent') 
<div class="container mt-5">
    <h2 class="mb-4">Add New Product</h2>
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" class="form-control" name="price" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Product Image</label>
        <input type="file" class="form-control" name="image" accept="image/*" required>
    </div>
    <div class="mb-3">
        <label for="">select Availablity</label>
        <select name="available" class="form-select" required>
            <option value="" selected disabled>Select Availability</option>
            <option >In Stock</option>
            <option >Out ofStock</option> 
        <select>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select name="choose" class="form-select" required>
            <option  selected disabled>Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add Product</button>
</form>
</div>
@endsection
