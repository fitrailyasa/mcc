@extends('layouts.admin.app')

@section('title', 'Edit Profile')

@section('content')
<form method="POST" action="{{ route('about.update', $about->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-header">
        <h5 class="modal-title">{{ __('Edit Data') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-2">
            <label class="form-label">{{ __('Title') }}</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror"
                   placeholder="Title" name="title" id="title"
                   value="{{ old('title', $about->title) }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-2">
            <label class="form-label">{{ __('Description') }}</label>
            <textarea class="form-control @error('description') is-invalid @enderror"
                      placeholder="Description" name="description" id="description" required>{{ old('description', $about->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">{{ __('WhatsApp') }}</label>
                <input type="text" class="form-control @error('whatsapp') is-invalid @enderror"
                       placeholder="WhatsApp" name="whatsapp" id="whatsapp"
                       value="{{ old('whatsapp', $about->whatsapp) }}" required>
                @error('whatsapp')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">{{ __('Link Instagram') }}</label>
                <input type="text" class="form-control @error('instagram') is-invalid @enderror"
                       placeholder="Instagram" name="instagram" id="instagram"
                       value="{{ old('instagram', $about->instagram) }}" required>
                @error('instagram')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">{{ __('Link Facebook') }}</label>
                <input type="text" class="form-control @error('facebook') is-invalid @enderror"
                       placeholder="Facebook" name="facebook" id="facebook"
                       value="{{ old('facebook', $about->facebook) }}" required>
                @error('facebook')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">{{ __('Email') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                       placeholder="Email" name="email" id="email"
                       value="{{ old('email', $about->email) }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Address') }}</label>
            <textarea class="form-control @error('address') is-invalid @enderror"
                      placeholder="Address" name="address" id="address" required>{{ old('address', $about->address) }}</textarea>
            @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
    </div>
</form>
@endsection
