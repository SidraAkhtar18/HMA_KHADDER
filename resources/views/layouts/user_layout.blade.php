<!-- resources/views/layouts/user_layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HMA Khaddar</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <style>
    :root {
      --primary: #3B5998;
      --accent: #A67C52;
      --bg: #f3f4f6;
      --footer-bg: #e1e5f2;
      --text-dark: #1a1a1a;
    }

    body {
      background-color: var(--bg);
      font-family: 'Segoe UI', sans-serif;
      color: var(--text-dark);
    }

    .navbar {
      background-color: var(--primary) !important;
    }

    .navbar .nav-link,
    .navbar .navbar-brand {
      color: white !important;
      font-weight: 500;
      transition: all 0.3s ease-in-out;
    }

    .navbar .nav-link:hover {
      color: var(--accent) !important;
      border-bottom: 2px solid var(--accent);
    }

    .navbar-brand img {
      height: 45px;
    }

    .form-control-sm {
      border-radius: 20px;
    }

    .btn-outline-light {
      border-radius: 20px;
      border: 1px solid white;
      color: white;
    }

    .btn-outline-light:hover {
      background-color: white;
      color: var(--primary);
    }

    main {
      padding: 50px 20px;
    }

    .fade-section {
      background-color: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.05);
    }

    .footer {
      background-color: #1A1A1A;
      color: var(--bg-color);
      padding: 40px 0;
    }

    footer h6 {
      font-weight: bold;
      margin-bottom: 16px;
    }

    footer a {
      color: #333;
      text-decoration: none;
    }

    footer a:hover {
      color: var(--accent);
    }

    .bi {
      margin-right: 6px;
    }

    @media (max-width: 768px) {
      .navbar-nav {
        text-align: center;
      }

      .navbar-nav .nav-item {
        margin-bottom: 10px;
      }
    }
  </style>
</head>

<body>

<!-- 🔷 Navbar -->
<nav class="navbar navbar-expand-lg shadow-sm py-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/logo.jpeg') }}" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="adminNavbar">
      <ul class="navbar-nav ms-auto me-3">
        <li class="nav-item"><a class="nav-link" href="{{route('Userhome')}}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('category.products.show', ['category_id' => 3]) }}">Summer Collection</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('category.products.show', ['category_id' => 4]) }}">Winter Collection</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('category.products.show', ['category_id' => 5]) }}">Plain Khaddar</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('contactus')}}">Contact Us</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('aboutus')}}">About Us</a></li>
      </ul>
   <form class="d-flex me-3" role="search" method="GET" action="{{ route('user.products.search') }}">
    <input class="form-control form-control-sm me-2" type="search" name="query" placeholder="Search products..." aria-label="Search">
    <button class="btn btn-outline-light btn-sm" type="submit">Search</button>
    </form>
<!-- In Customer Navbar -->
<a href="{{ route('user.profile') }}" class="nav-link">
    <i class="bi bi-person-circle"></i> Profile
</a>
      <a href="#" class="text-white ms-3"><i class="bi bi-cart-fill fs-4"></i></a>
    </div>
  </div>
</nav>
<!-- 🟡 Hero Section -->
<main>
  <div class="fade-section" data-aos="fade-up">
    @yield('herocontent')
    @yield('catcontent')
    @yield('cat1content')
    @yield('cat2content')
    @yield('cat3content')
    @yield('cat4content')
    @yield('cat5content')

    @yield('contactus')
    @yield('aboutus')
    @yield('message')


    @yield('ERP')
    @yield('PP')
    @yield('SP')
    @yield('TOS')
    @yield('usersearchcontent')
    @yield('productdetails)



  </div>
</main>

<!-- ⚫ Footer -->
<footer>
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
        <ul class="list-unstyled">
            <li><a href="{{ route('exchange.return') }}">Exchange & Return Policy</a></li>
    <li><a href="{{ route('terms') }}">Terms of Service</a></li>
          <li><a href="{{route('contactus')}}">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-4">
        <h6>Information</h6>
        <ul class="list-unstyled">
          <li><a href="{{route('aboutus')}}">About Us</a></li>
           <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
    <li><a href="{{ route('shipping') }}">Shipping Policy</a></li>
        </ul>
      </div>
    </div>
    <div class="text-center mt-4">
      <p>© 2025 HMA Khaddar. All Rights Reserved.</p>
      <img src="{{ asset('images/payment-methods.png') }}" width="150" alt="Payment Methods">
    </div>
  </div>
</footer>

<!-- JS Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ duration: 800, once: true });
</script>

</body>
</html>
