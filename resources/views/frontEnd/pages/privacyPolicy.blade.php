@extends('frontEnd.layout.master')


@section('content')
<!-- start page title area-->
<div class="page-title-area ptb-100">
    <div class="container">
        <div class="page-title-content">
            <h1>Privacy Policy</h1>
            <ul>
                <li class="item"><a href="{{ url('/') }}">Home</a></li>
                <li class="item"><a href="{{-- --}}"><i class="flaticon-play-button"></i>Privacy Policy</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-image">
        <img src="{{ asset('front/assets/images/about-bg.jpg') }}" alt="Demo Image">
    </div>

</div>
<!-- end page title area -->

<!-- start privacy-policy area -->
<div class="privacy-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">
                    <div class="widget">
                        <ul class="nav-list">
                            <li>
                                <a href="{{ route('front.about-us') }}">About Us</a>
                                <i class="flaticon-play-button"></i>
                            </li>
                            <li>
                                <a href="{{ route('front.termsOfService') }}">Terms of Service</a>
                                <i class="flaticon-play-button"></i>
                            </li>
                            <li class="active">
                                <a href="{{ route('front.privacyPolicy') }}">Privacy And Policy</a>
                                <i class="flaticon-play-button"></i>
                            </li>
                        </ul>
                    </div>


                </aside>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="details-desc">
                    <div class="content">
                        <h2>{{ getSiteSetting('privacy_policy_title') ?? '' }}</h2>
                        {!! getSiteSetting('privacy_policy_description') ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end privacy-policy area -->

@endsection
