@extends('layouts.admin.app')

@section('title', 'Package')

@section('content')
    <!-- Table -->
    <div class="mb-3">
        @include('admin.package.create')
    </div>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>{{ __('No') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Description') }}</th>
                <th>{{ __('Image') }}</th>
                {{-- <th>{{ __('Price') }}</th> --}}
                <th class="d-none d-lg-table-cell">{{ __('Category') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($packages as $package)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $package->name ?? '-' }}</td>
                    <td>{{ $package->desc ?? '-' }}</td>
                    <td>
                        <img class="img img-fluid" src="{{ asset('storage/' . $package->img) }}" alt="">
                    </td>
                    {{-- <td>RM {{ $package->price ?? '-' }}</td> --}}
                    <td class="d-none d-lg-table-cell">{{ $package->category->name ?? '-' }}</td>
                    <td class="manage-row">
                        @include('admin.package.edit')
                        @include('admin.package.delete')
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>{{ __('No') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Description') }}</th>
                <th>{{ __('Image') }}</th>
                {{-- <th>{{ __('Price') }}</th> --}}
                <th class="d-none d-lg-table-cell">{{ __('Category') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </tfoot>
    </table>
@endsection
