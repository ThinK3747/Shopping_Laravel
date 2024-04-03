<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="MyOnlineShop is an ecommerce UI template. Designed using bootstrap" />
  <meta name="author" content="Srikrushna Pal" />
  <title>My Online Shop | An ecommerce UI template</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('fe-asset/assets/favicons/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('fe-asset/assets/favicons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('fe-asset/assets/favicon s/favicon-16x16.png') }}">
  <meta name="theme-color" content="#712cf9" />

  <!-- Master styles for this template -->
  <link href="{{ asset('fe-asset/styles/style.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('fe-asset/styles/carousel.css')}}" rel="stylesheet" />
</head>

<body>
  <!-- SVG for social media start-->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <title>MyOnlineShop</title>
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
      </path>
    </symbol>
    <symbol id="facebook" viewBox="0 0 16 16">
      <path
        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
    </symbol>
    <symbol id="instagram" viewBox="0 0 16 16">
      <path
        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
    </symbol>
    <symbol id="twitter" viewBox="0 0 16 16">
      <path
        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
    </symbol>
  </svg>
  <!-- SVG for social media end-->

  <nav class="bg-primary border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="index.html" class="nav-link text-white px-2 active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="pages/aboutUs.html" class="nav-link text-white px-2">About</a></li>
        <li class="nav-item"><a href="pages/faq.html" class="nav-link text-white px-2">FAQ</a></li>
        <li class="nav-item"><a href="pages/contact.html" class="nav-link text-white px-2">Contact</a></li>
      </ul>
      @if (Auth::check())
      <ul class="nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle">{{Auth::user()->name}}</i>

          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="pages/userProfile.html">Profile</a></li>
            <li><a class="dropdown-item" href="pages/orderList.html">Orders</a></li>
            <li><a class="dropdown-item" href="pages/viewAddress.html">Address</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
          </ul>
        </li>
      </ul>

      @else
      <ul class="nav">
        <li class="nav-item"><a href="{{route('login')}}" class="nav-link text-white px-2">Login</a></li>
        <li class="nav-item d-none d-sm-block"><a href="{{route('register')}}" class="nav-link text-white px-2">Sign up</a></li>
      </ul>
      @endif


    </div>
  </nav>
  <div class="secondary-nav-customize">
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
        <div class="col-md-3 col-8 mb-md-0">
          <a href="index.html" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
            <img src="{{ asset('fe-asset/assets/favicons/favicon-32x32.png')}}" alt="" class="m-2">
            <span class="fs-4">MyOnlineShop</span>
          </a>
        </div>
        <div class="col-4 d-block d-sm-none text-end px-1 mb-3">
          <a href="pages/cart.html" type="button" class="btn btn-outline-primary">
            <i class="bi-cart-fill me-1"></i>
            <span class="badge bg-dark text-white ms-1 rounded-pill">
                {{$cart->getTotalQuantity()}}
            </span>
          </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{route('showProduct')}}" class="nav-link px-2 link-secondary">Shop</a></li>
          <li><a href="pages/product.html" class="nav-link px-2">Men</a></li>
          <li><a href="pages/product.html" class="nav-link px-2">Women</a></li>
          <li><a href="pages/product.html" class="nav-link px-2">Kid</a></li>
          <li><a href="pages/product.html" class="nav-link px-2">Book</a></li>
        </ul>

        <div class="col-md-3 col-12 d-none d-sm-block text-end">
          <a href="pages/cart.html" type="button" class="btn btn-outline-primary me-2">
            <i class="bi-cart-fill me-1"></i>
            Cart
            <span class="badge bg-dark text-white ms-1 rounded-pill">
                {{$cart->getTotalQuantity()}}
            </span>
          </a>
        </div>
      </header>
    </div>
  </div>

  @yield('main')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="{{ asset('fe-asset/scripts/script.js') }}"></script>
</body>

</html>
