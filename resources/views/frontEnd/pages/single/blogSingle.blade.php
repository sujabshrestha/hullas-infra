@extends('frontEnd.layout.master')


@section('content')
<!-- start page title area-->
<div class="page-title-area ptb-100">
    <div class="container">
        <div class="page-title-content">
            <h1>Blog Details</h1>
            <ul>
                <li class="item"><a href="{{ url('/') }}">Home</a></li>
                <li class="item"><a href="{{ route('front.allblogs') }}"><i class="flaticon-play-button"></i>All Blogs</a></li>
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

                    <div class="widget widget-article">
                        <h3 class="sub-title">Recent Post</h3>

                        @if (isset($posts) && !empty($posts))
                        @foreach ($posts as $post)
                        @if ($post->id != $blog->id)


                        <article class="article-item">
                            <a href="#" class="article-img">
                                <img src="{{ asset($post->image) }}" style="width: 200px !important;"  alt="blog-image" />
                            </a>
                            <div class="info">
                                <h6 class="title">
                                    <a href="{{ route('front.blogSingle', $blog->slug) }}">{{ $post->title }}</a>
                                </h6>
                            </div>
                        </article>
                        @endif
                        @endforeach
                        @endif
                    </div>
                </aside>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="image">
                        <img src="{{ asset($blog->image) }}" alt="image" />
                    </div>
                    {{-- <ul class="post-meta">
                        <li><a href="#">{{ $blog->created_at->format('d M, Y') }}</a></li>
                    </ul> --}}
                    <div class="content">
                        <h2>{{ $blog->title }}</h2>
                        {!! $blog->post_content !!}
                    </div>

                    <div class="comments-area">
                        <h3 class="sub-title">comments (03)</h3>
                        <ol class="comment-list">
                            <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="2"></div>

                        </ol>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<hr>

<!-- end blog details area -->
@endsection
