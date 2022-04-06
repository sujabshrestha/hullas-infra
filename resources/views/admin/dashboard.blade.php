@extends('admin.partials.master')

@push('styles')

    <link href="{{ asset('cork/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork/assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />

@endpush

@section('contents')



<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-md-8 layout-spacing" style="margin-left:12%; ">
            <div class="widget widget-chart-one">
                <div class="widget-heading text-md-center">
                    <h1 style="padding-left: 15%;">Welcome to Admin Panel</h1>

                </div>

                <div class="widget-content text-center">
                    <img style="width: 500px;height:400px;" src="{{ asset(getSiteSetting('logo')) }}" alt="{{ getSiteSetting('site_title')??'' }}">
                </div>
            </div>
        </div>
        <div class="col-md-4">

        </div>

    </div>


@endsection

@push('scripts')

    <script src="{{ asset('cork/plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('cork/assets/js/dashboard/dash_1.js') }}"></script>

@endpush
