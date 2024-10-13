@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('layouts.header')

    @include('components.about')

    @include('components.services')

    {{-- @include('components.features') --}}

    {{-- @include('components.offer') --}}

    {{-- @include('components.team') --}}

    @include('components.testimonial')
@endsection
