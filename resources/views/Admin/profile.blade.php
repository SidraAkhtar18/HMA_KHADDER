@extends('layouts.admin_layout') {{-- or use admin_layout / user_layout --}}
@section('adminprofile')
<div class="container mt-5">
    <h2 class="mb-4">My Profile</h2>

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
            <th>Role</th>
            <td>{{ $user->role->name ?? 'N/A' }}</td>
        </tr>
    </table>
</div>
@endsection
