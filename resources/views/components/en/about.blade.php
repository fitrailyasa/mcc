<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">About Us</h4>
                    <p class="text-justify">
                        Mutiara confinement is a company that offers confinement care services to mothers who have just
                        given birth.
                    </p>
                    <p class="text-justify">
                        Modern practice services in postnatal care. Focusing on mothers getting enough rest, eating a
                        balanced diet, and taking care of their health. Traditional treatment methods in Malaysian
                        society such as massage, bending (compresspanas), berbengung (wearing a corset or bally band),
                        bertangas (steam bath), and the use of herbs.
                    </p>
                    <p class="text-justify">
                        Mutiara Confinament provides comprehensive services for mothers and babies from the first day of
                        birth to the end of confinement.
                    </p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fab fa-whatsapp fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Chat Us</h4>
                                    <p class="mb-0 fs-5" style="letter-spacing: 1px;">{{ $about->whatsapp }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://wa.me/{{ $about->whatsapp }}"
                                class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Chat
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow d-none d-md-block fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="logo.png" class="img-fluid rounded w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
