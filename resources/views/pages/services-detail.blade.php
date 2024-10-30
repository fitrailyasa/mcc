@extends('layouts.app')

@section('title', 'Perkhidmatan Terperinci')
@section('services-active', 'active')

@section('content')
    @include('layouts.header-subpages')
    <!-- Services Start -->
    <div id="services" class="container-fluid service pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Perkhidmatan Terperinci</h4>
                <h1 class="display-5 mb-4">{{ $service['name'] }}</h1>
                <p>{{ $service['desc'] }}</p>
                <a target="_blank" class="btn btn-primary rounded-pill py-2 mb-3 px-4"
                    href="https://wa.me/{{ $about->whatsapp }}?text=Salam, saya nak tempah pakej {{ $service['name'] }}">Book
                    Sekarang</a>
                <img class="img img-fluid rounded" src="{{ asset('storage/' . $service['img']) }}" alt="">
            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection
