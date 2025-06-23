@extends('layouts.auth_layout')

@section('content')
<div class="container mt-5">
    <h2>Sign Up</h2>
    <form action="{{route('signup.store')}}" method="POST" >
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>   
        <div class="mb-3">
            <label>Role</label>
            <select name="choose" class="form-select" required>
                <option selected disabled >Select Role</option>
                @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>       
        <button class="btn btn-primary">signup</button>
    </form>
</div>
@endsection
