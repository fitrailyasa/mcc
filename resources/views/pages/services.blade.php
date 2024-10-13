@extends('layouts.app')

@section('title', 'Our Services')
@section('services-active', 'active')

@section('content')
    @include('layouts.header-subpages')
    @include('components.services')
@endsection
