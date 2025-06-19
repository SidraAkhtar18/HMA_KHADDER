<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Dashboard | HMA Khaddar</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <style>
    :root {
      --primary-color: #3B5998;    /* Deep Blue */
      --accent-color: #A67C52;     /* Warm Beige */
      --bg-color: #F2F2F2;         /* Light Background */
      --text-color: #1A1A1A;
      --hover-color: #2D4373;
    }

    body {
      background-color: var(--bg-color);
      color: var(--text-color);
      font-family: 'Segoe UI', sans-serif;
      overflow-x: hidden;
    }

    /* Navbar */
    .navbar {
      background-color: var(--primary-color);
    }

    .navbar .nav-link,
    .navbar .navbar-brand,
    .navbar .bi-person-circle {
      color: white !important;
      transition: color 0.3s ease;
    }

    .navbar .nav-link:hover {
      color: var(--accent-color) !important;
    }

    .form-control:focus {
      border-color: var(--accent-color);
      box-shadow: 0 0 0 0.2rem rgba(166, 124, 82, 0.25);
    }

    .btn-outline-light {
      transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
      background-color: var(--accent-color);
      border-color: var(--accent-color);
      color: white;
      transform: scale(1.05);
    }

    /* Main Content Section */
    .section-content {
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      padding: 30px;
      margin: 40px 0;
    }

    /* Footer */
    .footer {
      background-color: #1A1A1A;
      color: var(--bg-color);
      padding: 40px 0;
    }

    .footer h6 {
      color: white;
    }

    .footer a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .footer a:hover {
      color: white;
    }

    .footer .text-center {
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg shadow-sm py-3">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">
        <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" style="height: 40px;"> HMA Khaddar
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="adminNavbar">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('Admin.home') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('role') }}">Add Role</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('category.index') }}">Add Category</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('product.index') }}">Add Product</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('product.list') }}">List Products</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('order.list') }}">Orders</a></li>
        </ul>
        <form class="d-flex me-3" role="search" method="GET" action="{{ route('admin.products.search') }}"> 
        <input class="form-control form-control-sm me-2" type="search" name="query" placeholder="Search products..." aria-label="Search">
        <button class="btn btn-outline-light btn-sm" type="submit">Search</button>
        </form>
    </div>
    </div>
  </nav>

  <main class="container">
    <div class="section-content" data-aos="fade-in">
      @yield('homecontent')
      @yield('content')
      @yield('addproductcontent')
      @yield('listproductcontent')
      @yield('updateproductcontent')
      @yield('categorycontent')
       @yield('adminsearchcontent')
       @yield('orderlist')
      
    
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="container text-center text-md-start">
      <div class="row">
        <div class="col-md-4 mb-3">
          <h6>Get in Touch</h6>
          <p>Makki Madni Khaddar House, Kamalia...</p>
          <p><i class="bi bi-envelope"></i> mmkhaddar@gmail.com</p>
          <p><i class="bi bi-phone"></i> 0326-3477772</p>
        </div>
        <div class="col-md-4 mb-3">
          <h6>Customer Care</h6>
          <ul class="list-unstyled">
            <li><a href="#">Exchange & Return Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-3">
          <h6>Information</h6>
          <ul class="list-unstyled">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Shipping Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="text-center">
        <p>© 2025 HMA Khaddar. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true,
    });
  </script>
</body>
</html>
