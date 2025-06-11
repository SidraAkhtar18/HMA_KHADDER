<!-- resources/views/layouts/user_layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HMA Khaddar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #e8f0e2;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    nav {
      background-color: rgb(154, 157, 206) !important;
    }

    .navbar .nav-link {
      color: #333;
      font-weight: 500;
      transition: all 0.3s ease-in-out;
    }

    .nav-link:hover {
      border-bottom: 2px solid purple;
      color:rgb(231, 187, 130) !important;
    }

    .navbar-brand img {
      height: 45px;
    }

    .form-control-sm {
      border-radius: 20px;
    }

    .btn-outline-dark {
      border-radius: 20px;
    }

    section.bg {
      background-color: #b4cf9b;
    }

    .btn-primary {
      background-color: purple;
      border: none;
      border-radius: 25px;
      padding: 10px 25px;
      transition: 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #5e3370;
    }

    footer {
       background-color: rgb(154, 157, 206);
      color: #333;
    }

    footer h6 {
      color: #222;
      font-weight: 600;
      margin-bottom: 15px;
    }

    footer a {
      color: #444;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    footer a:hover {
      color: #000;
    }

    footer ul {
      padding-left: 0;
      list-style: none;
    }

    footer p, footer li {
      font-size: 14px;
    }

    .bi {
      margin-right: 5px;
    }

    @media (max-width: 767px) {
      .navbar-nav {
        text-align: center;
      }

      .navbar-nav .nav-item {
        margin-bottom: 10px;
      }
    }
  </style>
</head>
<body class="bg-light">

<!-- ✅ Navbar -->
<nav class="navbar navbar-expand-lg shadow-sm py-3">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/logo.jpeg') }}" alt="Logo">
    </a>
    <!-- Toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Links -->
    <div class="collapse navbar-collapse" id="adminNavbar">
      <ul class="navbar-nav ms-auto me-3">
       <li class="nav-item"><a class="nav-link" href="{{route('User.home')}}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Summer Collection</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Winter Collection</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Plain Khaddar</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
      </ul>
      <!-- Searchbar -->
      <form class="d-flex me-3" role="search">
        <input class="form-control form-control-sm me-2" type="search" placeholder="Search products..." aria-label="Search">
        <button class="btn btn-outline-dark btn-sm" type="submit">Search</button>
      </form>
      <!-- Icons -->
      <a href="#" class="text-dark"><i class="bi bi-person-circle fs-4"></i></a>
      <a href="#" class="text-dark ms-3"><i class="bi bi-cart-fill fs-4"></i></a>
    </div>
  </div>
</nav>

<!-- 🟡 Home Section -->
<main>
  @yield('homecontent')
</main>

<!-- 🔵 Main Content -->
<main>
  @yield('content')
</main>

<!-- 🔘 Footer -->
<footer class="pt-5 pb-3 mt-5">
  <div class="container text-center text-md-start">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h6>Get in touch</h6>
        <p>Makki Madni Khaddar House, Kamalia...</p>
        <p><i class="bi bi-envelope"></i> mmkhaddar@gmail.com</p>
        <p><i class="bi bi-phone"></i> 03263477772</p>
      </div>
      <div class="col-md-4 mb-4">
        <h6>Customer Care</h6>
        <ul>
          <li><a href="#">Exchange & Return Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-4">
        <h6>Information</h6>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Shipping Policy</a></li>
        </ul>
      </div>
    </div>
    <div class="text-center mt-4">
      <p>© 2025 HMA Khaddar. All Rights Reserved.</p>
      <img src="{{ asset('images/payment-methods.png') }}" width="150" alt="Payment Methods">
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
