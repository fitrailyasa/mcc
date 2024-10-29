<!-- Services Start -->
<div id="services" class="container-fluid service pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Services</h4>
            <h1 class="display-5 mb-4">We Services provided best offer</h1>
        </div>
        <div class="row g-4">
            @foreach ($services->where('category_id', '2') as $index => $service)
                <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="{{ 0.2 + ($index % 3) * 0.2 }}s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('storage/' . $service['img']) }}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="{{ route('services-detail', $service['slug']) }}" class="h4 d-inline-block mb-4">{{ $service['name'] }}</a>
                            {{-- <h3>RM {{ $service['price'] }}</h3> --}}
                            <p class="mb-4">{{ $service['desc'] }}</p>
                            <a target="_blank" class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('services-detail', $service['slug']) }}">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services End -->
