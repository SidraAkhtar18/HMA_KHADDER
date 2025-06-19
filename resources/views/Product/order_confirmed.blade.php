@extends('layouts.user_layout')

@section('confrimorder')
<div class="container mt-5 text-center">
    <h2>Your Order is Confirmed ✅</h2>
    <p>You will receive your order in 2–3 days.</p>
    <a href="{{ url('/customerhomein') }}" class="btn btn-primary mt-3">Back to Home</a>
</div>
@endsection
