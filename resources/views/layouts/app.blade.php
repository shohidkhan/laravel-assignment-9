<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <!-- Meta -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <!-- Title -->
  <title>Shahid Ullah</title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/favicon.ico" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
    rel="stylesheet">

  <!-- Vendor Styles [Bootstrap - Boxicons - Venobox - AOS] -->
  <link rel="stylesheet" href="{{ asset('assets') }}/css/all.vendors.min.css" />

  <!-- Main Style -->
  <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />

</head>

<body>
  <!-- Start Navbar Toggle -->
  <button type="button" class="mobile-nav-toggle d-lg-none">
    <i class='bx bx-menu'></i>
  </button>
  <!-- End Navbar Toggle -->

  @include('components.navbar')

  @yield('content')

  @include('components.footer')

  <!-- Start PreLoader -->
  <div id="preloader"></div>
  <!-- End PreLoader -->

  <!-- Start Go To Top Button -->
  <a href="#" class="back-to-top">
    <i class="bx bx-up-arrow-alt"></i>
  </a>
  <!-- End Go To Top Button -->

  <!-- Vendor Scripts [jQuery - Form - Lazy - Bootstrap - Waypoints - IsoTop - Venobox - TypedJS - AOS] -->
  <script src="{{ asset('assets') }}/js/all.vendors.min.js"></script>

  <!-- Main Script -->
  <script src="{{ asset('assets') }}/js/app.js"></script>
</body>

</html>