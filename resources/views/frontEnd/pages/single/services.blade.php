@extends('frontEnd.layout.master')


@section('content')
<!-- start page title area-->
<div class="page-title-area ptb-100">
    <div class="container">
        <div class="page-title-content">
            <h1>Services</h1>
            <ul>
                <li class="item"><a href="index.html">Home</a></li>
                <li class="item"><a href="services-grid.html"><i class="flaticon-play-button"></i>Services</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-image">
        <img src="assets/img/page-title/service-grid-bg.jpg" alt="Demo Image">
    </div>
</div>
<!-- end page title area -->

<!-- start best service section -->
<section class="best-service-section service-two ptb-100">
    <div class="container">
        <div class="section-title style-two">
            <h2 class="color-secondary">We Provide Best <span>Services</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row">
            @if (isset($ourservices) && !empty($ourservices))
            @foreach ($ourservices as $ourservice)
            <div class="col-lg-4">
                <div class="service-item-single">
                    {!! $ourservice->icon !!}
                    <h3><a href="{{ route('front.servicessingle', $ourservice->slug) }}">{{ $ourservice->title }}</a></h3>
                    {!! $ourservice->post_content !!}
                    <div class="cta-btn">
                        <a href="{{ route('front.servicessingle', $ourservice->slug) }}" class="read-more-btn"><i class="flaticon-play-button"></i> Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif

        </div>

    </div>
</section>
<!-- end best service section -->


@endsection
