@extends('frontEnd.layout.master')


@section('content')
    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Blog</h1>
                <ul>
                    <li class="item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="item"><a href="{{ route('front.allblogs') }}"><i class="flaticon-play-button"></i>Blog</a></li>
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
                @if (isset($blogs) && $blogs->count() > 0)
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6  col-sm-6 col-sm-6">
                            <div class="blog-item-single">
                                <div class="blog-item-img">
                                    <img src="{{ asset($blog->image) }}" style="height: 200px;" alt="Blog Image" />

                                    <div class="overlay-content">
                                        <a href="{{ route('front.blogSingle', $blog->slug) }}"><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <div class="blog-item-content">
                                    <h3><a href="{{ route('front.blogSingle', $blog->slug) }}">{{ $blog->title }} </a></h3>
                                    {!! Str::limit(strip_tags($blog->post_content), 70)  !!}
                                    <div class="cta-btn mt-2">
                                        <a href="{{ route('front.blogSingle', $blog->slug) }}" class="read-more-btn"><i class="flaticon-play-button"></i> Read
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
