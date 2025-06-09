<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard | HMA Khaddar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    /* Custom gradient for navbar and footer */
    .gradient-background {
      background: linear-gradient(to right, #434343, #000000); /* Dark gray to black gradient */
      color: white; /* Ensure text is readable on dark background */
    }

    /* Adjust footer link color for better visibility */
    .gradient-background footer a {
        color: rgba(255, 255, 255, 0.75); /* Lighter white for links */
        text-decoration: none;
    }

    .gradient-background footer a:hover {
        color: white;
    }
  </style>
</head>
<body class="bg-light"> 
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm py-3 gradient-background">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" style="height: 40px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="adminNavbar">
        <ul class="navbar-nav ms-auto me-3">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index') }}">Add Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('product.list') }}">List Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Orders</a>
          </li>
        </ul>
        <form class="d-flex me-3" role="search">
          <input class="form-control form-control-sm me-2" type="search" placeholder="Search products..." aria-label="Search">
          <button class="btn btn-outline-light btn-sm" type="submit">Search</button>
        </form>
        <a href="#" class="text-white"><i class="bi bi-person-circle fs-4"></i></a>
      </div>
    </div>
  </nav>
  <main class="container">
    @yield('homecontent')
  </main>
  <main class="container">
    @yield('addproductcontent')
  </main>
  <main class="container">
    @yield('listproductcontent')
  </main> 
  <main class="container">
    @yield('updateproductcontent')
  </main>
  <main class="container">
     @yield('categorycontent')
  </main>
  <footer class="py-3 ms-auto mt-5 gradient-background">
    <div class="container text-center text-md-start">
      <div class="row">
        <div class="col-md-4">
          <h6>Get in touch</h6>
          <p>Makki Madni Khaddar House, Kamalia...</p>
          <p><i class="bi bi-envelope"></i> mmkhaddar@gmail.com</p>
          <p><i class="bi bi-phone"></i> 03263477772</p>
        </div>
        <div class="col-md-4">
          <h6>Customer Care</h6>
          <ul class="list-unstyled">
            <li><a href="#">Exchange & Return Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h6>Information</h6>
          <ul class="list-unstyled">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Shipping Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="text-center mt-4">
        <p>© 2025 HMA Khaddar. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>