@extends('frontEnd.layout.master')

@push('style')
@endpush

@section('content')

    <div class="service-page">

        <div class="container ">
            <div class="row">
                <div class="col-md-4">
                    <div class="mobile-banner">
                        <img src="{{ asset('front/assets/images/online-pay.png') }}" class="img-fluid" alt="">
                        <div class="mobile-banner-wrapper">
                            <div class="title">
                                सरल र सुरक्षित<br>
                                अनलाईन पेमेन्ट
                            </div>
                            <div class="button-container">
                                <a href="">Login Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">

                    <div class="container">
                        <div class="row">
                            @if(isset($services) && $services->count() > 0)
                                @foreach($services as $service)
                                    <div class="col-md-4 col-6">
                                        <a href="{{ route('front.singleService',[$service->id]) }}" class="service-item">
                                            <div class="img-container">
                                                <img src="{{ asset($service->image) }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="title">
                                               {{ $service->title }}
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-md-4 col-6">
                                    <h5>No Services Added.</h5>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
@endpush