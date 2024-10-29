@extends('layouts.app')

@section('title', 'Perkhidmatan Kami')
@section('services-active', 'active')

@section('content')
    @include('layouts.header-subpages')
    @include('components.services')
@endsection
