@extends('layouts.user_layout')
@section('aboutus')
<!-- About Us Form -->
<!-- About Us with Feedback Form -->
<div class="container mt-5">
  <h2>About Us</h2>
  <p>Welcome to our general clothing store! We offer high-quality, stylish apparel for all seasons. Your feedback matters.</p>

  <h4 class="mt-4">Give Us Feedback</h4>
  <form action="{{route('aboutus.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="userName" class="form-label">Your Name</label>
      <input type="text" class="form-control" id="userName" name="userName" required>
    </div>

    <div class="mb-3">
      <label for="userFeedback" class="form-label">Feedback</label>
      <textarea class="form-control" id="userFeedback" name="userFeedback" rows="4" required></textarea>
    </div>

    <button type="submit" class="btn btn-success">Submit Feedback</button>
  </form>
</div>

@endsection

