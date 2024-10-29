<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    @include('layouts.navbar')

    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="banner.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption mt-0 pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 animated fadeInUp">
                            <div class="text-center">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To
                                </h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">
                                    {{ $about[0]->title }}</h1>
                                <p class="mb-5 fs-5">{{ $about[0]->description }}
                                </p>
                                <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#services">Book
                                        Now</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="text-white me-2">Follow Us:</h2>
                                    <div class="d-flex justify-content-end ms-2">
                                        <a target="_blank" class="btn btn-sm-square btn-light rounded-circle me-2"
                                            href="https://www.facebook.com/MutiaraConfinement"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" class="btn btn-sm-square btn-light rounded-circle mx-2"
                                            href="https://instagram.com/Mutiara_confinement"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
</div>
<!-- Navbar & Hero End -->
