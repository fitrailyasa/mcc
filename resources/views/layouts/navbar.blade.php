<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <img width="50" class="img img-fluid me-3 py-0 my-0" src="{{ asset('logo.png') }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link @yield('home-active')">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link @yield('about-active')">About</a>
            <a href="{{ route('services') }}" class="nav-item nav-link @yield('service-active')">Services</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact Us</a>
            <a href="{{ route('feedback') }}" class="nav-item nav-link">Feedback</a>
        </div>
        <a href="#services" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Book Now</a>
    </div>
</nav>
<!-- Navbar End -->
