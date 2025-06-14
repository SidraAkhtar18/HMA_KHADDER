@extends('layouts.user_layout')
@section('contactus')
<!-- Contact Us Form -->
<div class="container mt-5">
  <h2>Contact Us</h2>
  <form action="{{route('contactus.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Your Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Your Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Your Message</label>
      <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Send Message</button>
  </form>
</div>
@endsection

