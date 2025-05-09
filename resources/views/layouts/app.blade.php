<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">    @vite(['resources/sass/app.scss', 'resources/js/app.js'])




    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
      a{
          color:#ffffff
      }
      *{
          font-family: Almarai;
      }
      .cart-icon {
          position: relative;
          display: inline-block;
      }
      .cart-count {
          position: absolute;
          top: -10px;
          right: -10px;
          background-color: red;
          color: white;
          border-radius: 50%;
          padding: 2px 6px;
          font-size: 12px;
      }
  </style>
</head>
<body dir="rtl">
    
<header>

    <nav class="navbar" style="background-color: rgb(126, 65, 223);">
        <div class="container">
            <ul class="list-inline">
                <li class="list-inline-item p-1"> <a href="{{route('welcome')}}"> الرئيسية</a></li>
                <li class="list-inline-item p-1"><a href ="{{route('callus')}}">اتصل بنا</a></li>
                <li class="list-inline-item p-1"><a href ="{{route('aboutus')}}"> حولنا</a></li>
                <li class="list-inline-item p-1"><a href="{{route('mypro')}}">منتجاتنا</a></li>


            </ul>
            <div >
              <h3 class="text-white">موقع عالم التسوق</h3>
            </div>
            <div >
              <div class="ms-auto">
                <a href="#" class="cart-icon">
                    <i class="bi bi-cart4 fs-3"></i>
                    <span class="cart-count">{{session('count')}}</span>
                </a>
            </div>
        </div>
            </div>
        </div>

        </nav>
</header>
<main>

  @yield('content')
   
</main>
<!-- Footer -->
<footer class="bg-body-tertiary text-center">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" id="form5Example24" class="form-control" />
              <label class="form-label" for="form5Example24">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button data-mdb-ripple-init type="submit" class="btn btn-outline mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam eum
        harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a class="text-body" href="#!">Link 1</a>
            </li>
            <li>
              <a class="text-body" href="#!">Link 2</a>
            </li>
            <li>
              <a class="text-body" href="#!">Link 3</a>
            </li>
            <li>
              <a class="text-body" href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a class="text-body" href="#!">Link 1</a>
            </li>
            <li>
              <a class="text-body" href="#!">Link 2</a>
            </li>
            <li>
              <a class="text-body" href="#!">Link 3</a>
            </li>
            <li>
              <a class="text-body" href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a class="text-body" href="#!">Link 1</a>
            </li>
            <li>
              <a class="text-body" href="#!">Link 2</a>
            </li>
            <li>
              <a class="text-body" href="#!">Link 3</a>
            </li>
            <li>
              <a class="text-body" href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a class="text-body" href="#!">Link 1</a>
            </li>
            <li>
              <a class="text-body" href="#!">Link 2</a>
            </li>
            <li>
              <a class="text-body" href="#!">Link 3</a>
            </li>
            <li>
              <a class="text-body" href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2020 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>
</html>
