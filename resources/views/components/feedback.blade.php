<!-- Feedback Start -->
<div class="container-fluid feedback pb-5">
    <div class="container pb-5">
        <div class="row g-5 align-items-center">
            <h3 class="col-md-12 text-center">Ulasan Customer</h3>
            <form class="col-md-12" action="{{ route('feedbackStore') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 mx-auto">
                    <div class="form-group mb-3">
                        <label for="name">Nama Anda <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Nama Anda">
                    </div>
                    <div class="form-group mb-3">
                        <label for="profession">Profesion Anda <span class="text-danger">*</span></label>
                        <input type="profession" class="form-control" id="profession" name="profession"
                            placeholder="Profesion Anda">
                    </div>
                    <div class="form-group mb-3">
                        <label for="img">Muat Naik Imej (pilihan)</label>
                        <input type="file" class="form-control" id="img" name="img">
                    </div>
                    <div class="form-group mb-3">
                        <label for="rating">Penilaian 1-5 <span class="text-danger">*</span></label><br>
                        <input type="radio" id="rating1" name="rating" value="1">
                        <label for="rating1">1</label>
                        <input type="radio" id="rating2" name="rating" value="2">
                        <label for="rating2">2</label>
                        <input type="radio" id="rating3" name="rating" value="3">
                        <label for="rating3">3</label>
                        <input type="radio" id="rating4" name="rating" value="4">
                        <label for="rating4">4</label>
                        <input type="radio" id="rating5" name="rating" value="5">
                        <label for="rating5">5</label>
                    </div>
                    <div class="form-group mb-3">
                        <label for="Ulasan Anda....">Ulasan <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="review" name="review" rows="5" placeholder="ulasan..."></textarea>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary py-3 px-5" type="submit">Send Ulasan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Feedback End -->
