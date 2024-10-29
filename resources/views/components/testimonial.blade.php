<!-- Testimonial Start -->
<div class="container-fluid testimonial pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Testimonial</h4>
            <h1 class="display-5 mb-4">Our Clients Riviews</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            @foreach ($testimonials as $testimonial)
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x"></i>
                    </div>
                    <div class="testimonial-img">
                        @if ($testimonial['img'])
                            <img src="{{ asset('storage/' . $testimonial['img']) }}" class="img-fluid" alt="Image">
                        @else
                            <img src="{{ asset('img/default-image.jpg') }}" class="img-fluid" alt="Default Image">
                        @endif
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">{{ $testimonial['review'] }}</p>
                    </div>
                    <div class="testimonial-title">
                        <div>
                            <h4 class="mb-0">{{ $testimonial['name'] }}</h4>
                            <p class="mb-0">{{ $testimonial['profession'] }}</p>
                        </div>
                        <div class="d-flex text-primary">
                            @for ($i = 0; $i < $testimonial['rating']; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonial End -->
