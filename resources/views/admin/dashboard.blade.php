@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('content')

    <!-- Content -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box for users -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $users }}</h3>
                    <p>{{ __('Users') }}</p>
                </div>
                <a href="{{ route('user.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box for categories -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $categories }}</h3>
                    <p>{{ __('Categories') }}</p>
                </div>
                <a href="{{ route('category.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box for packages -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $packages }}</h3>
                    <p>{{ __('Packages') }}</p>
                </div>
                <a href="{{ route('package.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box for feedback -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $feedbacks }}</h3>
                    <p>{{ __('Feedbacks') }}</p>
                </div>
                <a href="{{ route('feedback.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>

@endsection
