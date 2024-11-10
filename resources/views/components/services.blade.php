<!-- Services Start -->
<style>
    /* CSS untuk memastikan gambar memiliki rasio 4:3 */
    .service-img {
        position: relative;
        width: 100%;
        padding-bottom: 75%;
        /* Rasio 4:3 */
        overflow: hidden;
        border-radius: 8px 8px 0 0;
    }

    .service-img img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Memastikan gambar mengisi container tanpa mengubah rasio */
    }
</style>

<div id="services" class="container-fluid service pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Perkhidmatan Kami</h4>
            <h1 class="display-5 mb-4">Kami Perkhidmatan menyediakan tawaran terbaik</h1>
        </div>
        <h3 class="mb-4 text-center">Penjaagaan Ibu</h3>
        <div class="row g-4 mb-4 pb-4">
            <div class="col-md-4 col-lg-4 col-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/penjagaan1.jpg') }}" class="img-fluid rounded-top w-100"
                            alt="Mandian Herba">
                    </div>
                    <div class="rounded-bottom p-3">
                        <div class="h5 d-inline-block">Mandian Herba</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/penjagaan2.jpg') }}" class="img-fluid rounded-top w-100"
                            alt="Urutan Tradisional">
                    </div>
                    <div class="rounded-bottom p-3">
                        <div class="h5 d-inline-block">Urutan Tradisional</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/penjagaan3.jpg') }}" class="img-fluid rounded-top w-100"
                            alt="Bertengku & Berbengkung">
                    </div>
                    <div class="rounded-bottom p-3">
                        <div class="h5 d-inline-block">Bertengku & Berbengkung</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/penjagaan4.jpg') }}" class="img-fluid rounded-top w-100"
                            alt="Bertanggas">
                    </div>
                    <div class="rounded-bottom p-3">
                        <div class="h5 d-inline-block">Bertanggas</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-6 wow fadeInUp" data-wow-delay="1.0s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/penjagaan5.jpg') }}" class="img-fluid rounded-top w-100"
                            alt="Param & Pilis">
                    </div>
                    <div class="rounded-bottom p-3">
                        <div class="h5 d-inline-block">Param & Pilis</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-6 wow fadeInUp" data-wow-delay="1.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/penjagaan6.jpg') }}" class="img-fluid rounded-top w-100" alt="Sauna">
                    </div>
                    <div class="rounded-bottom p-1">
                        <div class="h5 d-inline-b3ock mb-4">Sauna</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-6 wow fadeInUp" data-wow-delay="1.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/penjagaan7.jpg') }}" class="img-fluid rounded-top w-100" alt="Lulur">
                    </div>
                    <div class="rounded-bottom p-1">
                        <div class="h5 d-inline-b3ock mb-4">Lulur</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-6 wow fadeInUp" data-wow-delay="1.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/penjagaan8.jpg') }}" class="img-fluid rounded-top w-100"
                            alt="Makanan Berpantang">
                    </div>
                    <div class="rounded-bottom p-3">
                        <div class="h5 d-inline-block">Makanan Berpantang</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-6 wow fadeInUp" data-wow-delay="1.8s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/penjagaan9.jpg') }}" class="img-fluid rounded-top w-100"
                            alt="Penutup Pantangan">
                    </div>
                    <div class="rounded-bottom p-3">
                        <div class="h5 d-inline-block">Penutup Pantangan</div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="mb-4 text-center">Penjagaan Bayi</h3>
        <div class="row g-4 mb-4 pb-4">
            <div class="col-md-4 col-lg-4 col-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/penjagaan_bayi1.jpg') }}" class="img-fluid rounded-top w-100"
                            alt="Mandian Bayi">
                    </div>
                    <div class="rounded-bottom p-3">
                        <div class="h5 d-inline-block">Mandian Bayi</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/penjagaan_bayi2.jpg') }}" class="img-fluid rounded-top w-100"
                            alt="Urutan Bayi">
                    </div>
                    <div class="rounded-bottom p-3">
                        <div class="h5 d-inline-block">Urutan Bayi</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/penjagaan_bayi3.jpg') }}" class="img-fluid rounded-top w-100"
                            alt="Tuam Bayi">
                    </div>
                    <div class="rounded-bottom p-3">
                        <div class="h5 d-inline-block">Tuam Bayi</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/penjagaan_bayi4.jpg') }}" class="img-fluid rounded-top w-100"
                            alt="Rawatan Tali Pusat Bayi">
                    </div>
                    <div class="rounded-bottom p-3">
                        <div class="h5 d-inline-block">Rawatan Tali Pusat Bayi</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-6 wow fadeInUp" data-wow-delay="1.0s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/penjagaan_bayi5.jpg') }}" class="img-fluid rounded-top w-100"
                            alt="Cukur Kepala Bayi">
                    </div>
                    <div class="rounded-bottom p-3">
                        <div class="h5 d-inline-block">Cukur Kepala Bayi</div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="mb-4 text-center">Pakej</h1>
        <div class="row g-4 mb-4 pb-4">
            @foreach ($services->where('category_id', '2') as $index => $service)
                <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="{{ 0.2 + ($index % 3) * 0.2 }}s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('storage/' . $service['img']) }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="{{ route('services-detail', $service['slug']) }}"
                                class="h4 d-inline-block">{{ $service['name'] }}</a>
                            {{-- <h3>RM {{ $service['price'] }}</h3> --}}
                            <p class="mb-4">{{ $service['desc'] }}</p>
                            <a target="_blank" class="btn btn-primary rounded-pill py-2 px-4"
                                href="{{ route('services-detail', $service['slug']) }}">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services End -->
