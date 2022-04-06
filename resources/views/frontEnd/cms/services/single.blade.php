@extends('frontEnd.layout.master')

@push('style')
@endpush

@section('content')


    <div class="page-section container">

        <div class="page-title">
            {{ $service->title ?? '' }}
            <div class="title-bar">
                <span></span><span></span><span></span>
            </div>
        </div>
        <div class="single-servicce-page">
            <div class="row">
                <div class="col-md-4">
                    <div class="img-container">
                        <img src="{{ asset($service->image ?? '') }}" class="img-fluid" alt="service-image">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="description">
                        {!! $service->post_content ?? '' !!}
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection

@push('script')
@endpush

