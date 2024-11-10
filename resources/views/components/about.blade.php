<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Tentang Kami</h4>
                    <p class="text-justify">
                        Mutiara confinement adalah syarikat yang menawarkan perkhidmatan penjagaan pantang kepada
                        ibu-ibu yang baru bersalin.
                    </p>
                    <p class="text-justify">
                        Perkhidmatan amalan moden dalam penjagaan postpantrum. Memberi tumpuan kepada ibu yang mendapat
                        rehat yang cukup, mengambil diet yang seimbang, dan menjaga kesehatan. Kaedah rawatan traditonal
                        dalam masyarakat Malaysia seperti berurut (massage), bertungku (kompresspanas), berbengkung
                        (memakai korset atau bally band), bertangas (mandi uap), dan penggunaan herba.
                    </p>
                    <p class="text-justify">
                        Mutiara Confinament menyediakan perkhidmatan menyeluruh untuk ibu dan bayi dari seawal hari
                        pertama kelahiran hingga penutup pantang.
                    </p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fab fa-whatsapp fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Chat Kami</h4>
                                    <p class="mb-0 fs-5" style="letter-spacing: 1px;">{{ $about->whatsapp }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://wa.me/{{ $about->whatsapp }}"
                                class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Chat
                                Sekarang</a>
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
