@extends('frontEnd.layout.master')


@section('content')
<!-- start page title area-->
<div class="page-title-area ptb-100">
    <div class="container">
        <div class="page-title-content">
            <h1>Product Details</h1>
            <ul>
                <li class="item"><a href="{{ url('/') }}">Home</a></li>
                <li class="item"><a href="{{ route('front.allproducts') }}"><i class="flaticon-play-button"></i>All products</a></li>
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
            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">

                    <div class="widget widget-article">
                        <h3 class="sub-title">Recent Blogs</h3>

                        @if (isset($posts) && !empty($posts))
                        @foreach ($posts as $post)



                        <article class="article-item">
                            <a href="#" class="article-img">
                                <img src="{{ asset($post->image) }}" style="width: 200px !important;"  alt="blog-image" />
                            </a>
                            <div class="info">
                                <h6 class="title">
                                    <a href="{{ route('front.blogSingle', $post->slug) }}">{{ $post->title }}</a>
                                </h6>
                            </div>
                        </article>
                        @endforeach
                        @endif
                    </div>
                </aside>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="image">
                        <img src="{{ asset($productSingle->image) }}" alt="image" />
                    </div>
                    {{-- <ul class="post-meta">
                        <li><a href="#">{{ $productSingle->created_at->format('d M, Y') }}</a></li>
                    </ul> --}}
                    <div class="content">
                        <h2>{{ $productSingle->title }}</h2>
                        {!! $productSingle->post_content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end blog details area -->

@endsection
