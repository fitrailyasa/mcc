<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative px-0 pb-5">
    @include('layouts.en.navbar')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">@yield('title')</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">@yield('title')</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->