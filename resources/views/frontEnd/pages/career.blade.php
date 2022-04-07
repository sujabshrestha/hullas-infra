@extends('frontEnd.layout.master')
@section('pageTitle', 'Career | ' . getSiteSetting('site_title'))
@section('pageName', 'Career')
@push('style')
@endpush

@section('content')

    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Carrier</h1>
                <ul>
                    <li class="item"><a href="index.html">Home</a></li>
                    <li class="item"><a href="blog-details.html"><i class="flaticon-play-button"></i>Carrier</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('front/assets/images/about-bg.jpg') }}" alt="Demo Image">
        </div>

    </div>
    <!-- end page title area -->

    <!-- start blog details area -->
    <div class="blog-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="blog-details-desc">
                        @if (isset($posts) && $posts->count() > 0)
                            @foreach ($posts as $post)
                                <div class="comments-area">
                                    <h3 class="sub-title">{{ $post->title }}</h3>
                                    <ol class="comment-list">
                                        <li class="comment">
                                            <article class="comment-body">

                                                <div class="comment-content clearfix">
                                                    <div class="comment-metadata">
                                                        {!! Str::limit(strip_tags($post->post_content), 240)  !!}

                                                    </div>
                                                    <div class="reply mt-2">
                                                        <a href="{{ route('front.careerSingle', $post->slug) }}" class="primary-btn">Read More</a>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>

                                    </ol>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog details area -->

@endsection

@push('script')
@endpush
