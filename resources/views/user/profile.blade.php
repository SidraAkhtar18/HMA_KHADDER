@extends('layouts.user_layout')

@section('userprofile')
<div class="container mt-5">
    <h2 class="mb-4">User Profile</h2>

    <table class="table table-bordered w-50">
        <tr>
            <th>Name</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Role ID</th>
            <td>{{ $user->role_id }}</td>
        </tr>
    </table>
</div>
@endsection
