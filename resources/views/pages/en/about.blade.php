@extends('layouts.en.app')

@section('title', 'About Us')
@section('about-active', 'active')

@section('content')
    @include('layouts.en.header-subpages')
    @include('components.en.about')
    @include('components.en.services')
@endsection
