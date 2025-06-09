@extends('layouts.auth_layout')

@section('content')
<div class="container mt-5">
    <h2>Add Role</h2>
    <form method="POST" action="{{route('role.store')}}">
        @csrf
        <div class="mb-3">
            <label>Role</label>
            <input type="text" name="role" class="form-control" required>
        </div>     
        <button class="btn btn-primary">Add Role</button>
    </form>
</div>
@endsection
