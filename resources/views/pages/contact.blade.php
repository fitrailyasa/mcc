@extends('layouts.app')

@section('title', 'Contact')
@section('contact-active', 'active')

@section('content')
    @include('layouts.header-subpages')
    @include('components.contact')
    @include('components.services')
@endsection
