@extends('layouts.en.app')

@section('title', 'Home')

@section('content')
    @include('layouts.en.header')

    @include('components.en.about')

    @include('components.en.services')

    @include('components.en.testimonial')
@endsection
