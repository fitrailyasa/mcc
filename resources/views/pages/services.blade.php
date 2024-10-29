@extends('layouts.app')

@section('title', 'Services Kami')
@section('services-active', 'active')

@section('content')
    @include('layouts.header-subpages')
    @include('components.services')
@endsection
