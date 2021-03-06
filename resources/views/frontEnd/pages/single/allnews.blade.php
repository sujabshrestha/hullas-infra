@extends('frontEnd.layout.master')


@section('content')
    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>News</h1>
                <ul>
                    <li class="item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="item"><a href="{{ route('front.allnews') }}"><i class="flaticon-play-button"></i>News</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('front/assets/images/about-bg.jpg') }}" alt="Demo Image">
        </div>

    </div>
    <!-- end page title area -->

    <!-- start blog area -->
    <div class="blog-grid ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                @if (isset($allnews) && $allnews->count() > 0)
                    @foreach ($allnews as $news)
                        <div class="col-lg-4 col-md-6  col-sm-6 col-sm-6">
                            <div class="blog-item-single">
                                <div class="blog-item-img">
                                <img src="{{ asset($news->image) }}" alt="Blog Image" />
                                    <div class="overlay-content">
                                        <a href="{{ route('front.newsSingle', $news->slug) }}"><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <div class="blog-item-content">
                                    <h3><a href="{{ route('front.newsSingle', $news->slug) }}">{{ $news->title }}</a></h3>
                                    {!! Str::limit(strip_tags($news->post_content), 70)  !!}
                                    <div class="cta-btn">
                                        <a href="{{ route('front.newsSingle', $news->slug) }}" class="read-more-btn"><i class="flaticon-play-button"></i> Read
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
