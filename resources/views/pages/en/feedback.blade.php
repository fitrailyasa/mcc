@extends('layouts.en.app')

@section('title', 'Form Feedback')
@section('feedback-active', 'active')

@section('content')
    @include('layouts.en.header-subpages')
    @include('components.en.feedback')
    @include('components.en.services')
@endsection
