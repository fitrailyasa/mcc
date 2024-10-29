@extends('layouts.en.app')

@section('title', 'Contact')
@section('contact-active', 'active')

@section('content')
    @include('layouts.en.header-subpages')
    @include('components.en.contact')
    @include('components.en.services')
@endsection
