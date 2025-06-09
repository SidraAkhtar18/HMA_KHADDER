@extends('layouts.auth_layout')

@section('content')
<div class="container mt-5">
    <h2>Login</h2>
    <form method="POST" action="{{route('login.store')}}">
        @csrf
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button class="btn btn-primary">Login</button>
    </form>
</div>
@endsection
