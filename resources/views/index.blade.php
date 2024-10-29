@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('layouts.header')

    @include('components.about')

    @include('components.services')

    @include('components.testimonial')
@endsection
