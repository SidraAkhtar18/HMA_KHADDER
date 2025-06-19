@extends('layouts.admin_layout')
@section('updateproductcontent') 
<div class="container mt-5">
    <h2 class="mb-4">Update Existing Product</h2>
    <form action="{{ route('products.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="update" class="form-label">Product Id</label>
        <input type="text" class="form-control" name="update" value="{{$EditProduct->id}}" required>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" class="form-control" name="name" value="{{$EditProduct->name}}" required>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" class="form-control" name="price" value="{{$EditProduct->price}}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" rows="3" value="{{$EditProduct->description}}"></textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Product Image</label>
        <input type="file" class="form-control" name="image" accept="image/*"  value="{{$EditProduct->image}}" required>
    </div>
    <div class="mb-3">
        <label for="">select Availablity</label>
        <select name="available" class="form-select" value="{{$EditProduct->available}}" required>
            <option value="" selected disabled>Select Availability</option>
            <option >In Stock</option>
            <option >Out ofStock</option> <select>
    </div>
     <div class="mb-3">
        <label for="price" class="form-label">Quantity</label>
        <input type="number" class="form-control" name="quantity"  value="{{$EditProduct->quantity}}" required>
    </div>
      
    <button type="submit" class="btn btn-primary">Update Product</button>
</form>
</div>
@endsection
