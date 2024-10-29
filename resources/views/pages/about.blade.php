@extends('layouts.app')

@section('title', 'Tentang Kami')
@section('about-active', 'active')

@section('content')
    @include('layouts.header-subpages')
    @include('components.about')
    @include('components.services')
@endsection
