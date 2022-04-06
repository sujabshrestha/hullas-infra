@extends('frontEnd.layout.master')


@section('content')
    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Case Studies</h1>
                <ul>
                    <li class="item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="item"><a href="{{ route('front.allcasestudies') }}"><i class="flaticon-play-button"></i>Case Studies</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="assets/img/page-title/blog-grid-bg.jpg" alt="Demo Image">
        </div>
    </div>
    <!-- end page title area -->

    <!-- start blog area -->
    <div class="blog-grid ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                @if (isset($allcasestudies) && $allcasestudies->count() > 0)
                    @foreach ($allcasestudies as $casestudy)
                        <div class="col-lg-4 col-md-6  col-sm-6 col-sm-6">
                            <div class="blog-item-single">
                                <div class="blog-item-img">
                                    <img src="{{ asset($casestudy->image) }}" alt="Blog Image" />
                                    <div class="tag">
                                        <span>{{ $casestudy->created_at->format('d') }}</span>
                                        <span>{{ $casestudy->created_at->format('M') }}</span>
                                    </div>
                                    <div class="overlay-content">
                                        <a href="#"><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <div class="blog-item-content">
                                    <h3><a href="blog-details.html">How To Instruct Construction Work </a></h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, amet molestias!
                                    </p>
                                    <div class="cta-btn">
                                        <a href="{{ route('front.casestudySingle', $casestudy->slug) }}" class="read-more-btn"><i class="flaticon-play-button"></i> Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
    <!-- end blog area -->

@endsection
