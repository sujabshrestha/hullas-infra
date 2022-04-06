@extends('frontEnd.layout.master')
@section('pageTitle', 'Products | ' . getSiteSetting('site_title'))
@section('pageName', 'Product')
@push('style')
@endpush

@section('content')

    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Products</h1>
                <ul>
                    <li class="item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="item"><a href="{{ route('front.allproducts') }}"><i
                                class="flaticon-play-button"></i>Product</a></li>
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

                @if (isset($pebs) && $pebs->count() > 0)
                    @foreach ($pebs as $peb)
                        <div class="col-lg-4 col-md-6  col-sm-6 col-sm-6">
                            <div class="blog-item-single">
                                <div class="blog-item-img">
                                    <img src="{{ asset($peb->image) }}" alt="Blog Image" />
                                    <div class="tag">
                                        <span>{{ $peb->created_at->format('d') }}</span>
                                        <span>{{ $peb->created_at->format('M') }}</span>
                                    </div>
                                    <div class="overlay-content">
                                        <a href="#"><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <div class="blog-item-content">
                                    <h3><a
                                            href="{{ route('front.productSingle', $peb->slug) }}">{{ $peb->title }}</a>
                                    </h3>
                                    {!! $peb->post_content !!}
                                    <div class="cta-btn">
                                        <a href="{{ route('front.productSingle', $peb->slug) }}" class="read-more-btn"><i
                                                class="flaticon-play-button"></i> Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @elseif (isset($structuralpipes) && $structuralpipes->count() > 0)
                    @foreach ($structuralpipes as $structuralpipe)
                        <div class="col-lg-4 col-md-6  col-sm-6 col-sm-6">
                            <div class="blog-item-single">
                                <div class="blog-item-img">
                                    <img src="{{ asset($structuralpipe->image) }}" alt="Blog Image" />
                                    <div class="tag">
                                        <span>{{ $structuralpipe->created_at->format('d') }}</span>
                                        <span>{{ $structuralpipe->created_at->format('M') }}</span>
                                    </div>
                                    <div class="overlay-content">
                                        <a href="#"><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <div class="blog-item-content">
                                    <h3><a
                                            href="{{ route('front.productSingle', $structuralpipe->slug) }}">{{ $structuralpipe->title }}</a>
                                    </h3>
                                    {!! $structuralpipe->post_content !!}
                                    <div class="cta-btn">
                                        <a href="{{ route('front.productSingle', $structuralpipe->slug) }}"
                                            class="read-more-btn"><i class="flaticon-play-button"></i> Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @elseif(isset($hrgalvanizings) && $hrgalvanizings->count() > 0)
                    @foreach ($hrgalvanizings as $hrgalvanizing)
                        <div class="col-lg-4 col-md-6  col-sm-6 col-sm-6">
                            <div class="blog-item-single">
                                <div class="blog-item-img">
                                    <img src="{{ asset($hrgalvanizing->image) }}" alt="Blog Image" />
                                    <div class="tag">
                                        <span>{{ $hrgalvanizing->created_at->format('d') }}</span>
                                        <span>{{ $hrgalvanizing->created_at->format('M') }}</span>
                                    </div>
                                    <div class="overlay-content">
                                        <a href="#"><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <div class="blog-item-content">
                                    <h3><a
                                            href="{{ route('front.productSingle', $hrgalvanizing->slug) }}">{{ $hrgalvanizing->title }}</a>
                                    </h3>
                                    {!! $hrgalvanizing->post_content !!}
                                    <div class="cta-btn">
                                        <a href="{{ route('front.productSingle', $hrgalvanizing->slug) }}"
                                            class="read-more-btn"><i class="flaticon-play-button"></i> Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    @if (isset($products) && $products->count() > 0)

                        @foreach ($products as $product)
                            <div class="col-lg-4 col-md-6  col-sm-6 col-sm-6">
                                <div class="blog-item-single">
                                    <div class="blog-item-img">
                                        <img src="{{ asset($product->image) }}" style="height: 345px !important;"
                                            alt="Blog Image" />
                                        <div class="tag">
                                            <span>{{ $product->created_at->format('d') }}</span>
                                            <span>{{ $product->created_at->format('M') }}</span>
                                        </div>
                                        <div class="overlay-content">
                                            <a href="#"><i class="flaticon-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-item-content">
                                        <h3><a
                                                href="{{ route('front.productSingle', $product->slug) }}">{{ $product->title }}</a>
                                        </h3>
                                        {!! $product->post_content !!}
                                        <div class="cta-btn">
                                            <a href="{{ route('front.productSingle', $product->slug) }}"
                                                class="read-more-btn"><i class="flaticon-play-button"></i> Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                @endif

            </div>
        </div>
    </div>
    <!-- end blog area -->
    <!-- Page title -->
    <!-- /.page-title -->

    {{-- <section class="flat-row portfolio-post" id="work">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <ul class="portfolio-filter style1">

                        @if ($productCategories)
                            <li class="active"><a data-filter="*" href="#">All Products</a></li>
                            @foreach ($productCategories as $category)
                                <li><a data-filter=".{{ $category->id }}" href="#">{{ $category->title }}</a></li>
                            @endforeach
                        @endif
                    </ul><!-- /.project-filter -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-portfolio v4 style1 grid-3columns">
                        <div class="portfolio-wrap clearfix">
                            @if ($products)
                                @foreach ($products as $product)
                                    <div class="item {{ $product->parent_category }}">
                                        <div class="featured-images">
                                            {!! gobalPostImage($product->id, 'thumbnail') !!}
                                            <h3 class="project-title">{{ $product->title }}</h3>
                                            <a class="view-detail" href="{{ route('front.product.single', $product->slug) }}">View More</a>
                                            <div class="overlay">
                                            </div>
                                        </div><!-- /.featured-images -->
                                    </div>
                                @endforeach
                            @endif
                        </div><!-- /.portfolio-wrap -->
                    </div><!-- /.flat-portfolio -->
                </div>
            </div>
        </div>
    </section> --}}


@endsection

@push('script')
@endpush
