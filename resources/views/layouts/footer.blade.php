<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5 border-start-0 border-end-0"
        style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-8">
                <div class="footer-item">
                    <a href="{{ route('home') }}" class="p-0">
                        <h4 class="text-white"><img width="50" class="img img-fluid me-3"
                                src="{{ asset('logo.png') }}" alt="">{{ $about->title }}</h4>
                    </a>
                    <p class="mb-4">{{ $about->description }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Maklumat Hubungan</h4>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-map-marker-alt text-primary me-3"></i>
                        <p class="text-white mb-0">{{ $about->address }}</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope text-primary me-3"></i>
                        <p class="text-white mb-0">{{ $about->email }}</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fab fa-whatsapp text-primary me-3"></i>
                        <p class="text-white mb-0">{{ $about->whatsapp }}</p>
                    </div>
                    <div class="d-flex mt-2">
                        <a target="_blank" class="btn btn-primary btn-sm-square rounded-circle me-3"
                            href="{{ $about->facebook }}"><i class="fab fa-facebook-f text-white"></i></a>
                        <a target="_blank" class="btn btn-primary btn-sm-square rounded-circle me-3"
                            href="{{ $about->instagram }}"><i class="fab fa-instagram text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
