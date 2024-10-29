@extends('layouts.en.app')

@section('title', 'Our Services')
@section('services-active', 'active')

@section('content')
    @include('layouts.en.header-subpages')
    @include('components.en.services')
@endsection
