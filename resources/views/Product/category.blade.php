@extends('layouts.admin_layout')

@section('categorycontent')
<div class="container mt-5">
    <h2>Add Category</h2>
    <form method="POST" action="{{route('category.store')}}">
        @csrf
        <div class="mb-3">
            <label>Category Form</label>
            <input type="text" name="category" class="form-control" required>
        </div>     
        <button class="btn btn-primary">Add Category</button>
    </form>
</div>
@endsection
