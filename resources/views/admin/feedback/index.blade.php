@extends('layouts.admin.app')

@section('title', 'Feedbacks')

@section('content')
    <!-- Table -->
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>{{ __('No') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Profession') }}</th>
                <th>{{ __('Review') }}</th>
                <th>{{ __('Rating') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feedbacks as $feedback)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $feedback->name ?? '-' }}</td>
                    <td>{{ $feedback->profession ?? '-' }}</td>
                    <td>{{ $feedback->review ?? '-' }}</td>
                    <td>{{ $feedback->rating ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>{{ __('No') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Profession') }}</th>
                <th>{{ __('Review') }}</th>
                <th>{{ __('Rating') }}</th>
            </tr>
        </tfoot>
    </table>
@endsection
