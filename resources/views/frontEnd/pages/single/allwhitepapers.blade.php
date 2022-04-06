@extends('frontEnd.layout.master')


@section('content')
    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>White Papers</h1>
                <ul>
                    <li class="item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="item"><a href="{{ route('front.allwhitepapers') }}"><i class="flaticon-play-button"></i>White Papers</a></li>
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
                @if (isset($allwhitepapers) && $allwhitepapers->count() > 0)
                    @foreach ($allwhitepapers as $whitepapers)
                        <div class="col-lg-4 col-md-6  col-sm-6 col-sm-6">
                            <div class="blog-item-single">
                                <div class="blog-item-img">
                                    <img src="{{ asset($whitepapers->image) }}" alt="Blog Image" />
                                    <div class="tag">
                                        <span>{{ $whitepapers->created_at->format('d') }}</span>
                                        <span>{{ $whitepapers->created_at->format('M') }}</span>
                                    </div>
                                    <div class="overlay-content">
                                        <a href="#"><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <div class="blog-item-content">
                                    <h3><a href="{{ route('front.whitepaperSingle', $whitepapers->slug) }}">{{ $whitepapers->title }}</a></h3>
                                    {!! $whitepapers->post_content !!}
                                    <div class="cta-btn">
                                        <a href="{{ route('front.whitepaperSingle', $whitepapers->slug) }}" class="read-more-btn"><i class="flaticon-play-button"></i> Read
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
