@extends('layouts.app')

@section('title', 'Form Feedback')
@section('feedback-active', 'active')

@section('content')
    @include('layouts.header-subpages')
    @include('components.feedback')
@endsection
