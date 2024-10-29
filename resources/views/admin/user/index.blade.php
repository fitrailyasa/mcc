@extends('layouts.admin.app')

@section('title', 'Users')

@section('content')
    <!-- Table -->
    <div class="mb-3">
        @include('admin.user.create')
    </div>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>{{ __('No') }}</th>
                <th>{{ __('Name') }}</th>
                <th class="d-none d-lg-table-cell">{{ __('Email') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name ?? '-' }}</td>
                    <td class="d-none d-lg-table-cell">{{ $user->email ?? '-' }}</td>
                    <td class="manage-row">
                            @include('admin.user.edit')
                            @include('admin.user.delete')
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>{{ __('No') }}</th>
                <th>{{ __('Name') }}</th>
                <th class="d-none d-lg-table-cell">{{ __('Email') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </tfoot>
    </table>
@endsection
