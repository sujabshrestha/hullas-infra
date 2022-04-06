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

    </div>
    <!-- end page title area -->

    <!-- start blog details area -->
    <div class="blog-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        <div class="contact-form">
                            <h3 class="sub-title">Get In Touch</h3>
                            <p>You can dream, create, design, and build the most wonderful place.</p>
                            <form id='contactForm'>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="name" required=""
                                                data-error="Please enter your name" placeholder="Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="email" required=""
                                                data-error="Please enter your email" placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea id="message" class="form-control" required="" data-error="Please enter your message" placeholder="Message"
                                                rows="6"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="primary-btn">get a free quote</button>
                                        <div id="msgSubmit" class="h5 text-center hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-8 col-md-12">
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

                                                        <div class="reply mt-2">
                                                            <a href="{{ route('front.careerSingle', $post->slug) }}" class="primary-btn">Read More</a>
                                                        </div>
                                                    </div>
                                                   {!! $post->post_content !!}
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
