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

    </div>
    <!-- end page title area -->

    <!-- start blog area -->
    <div class="blog-grid ptb-100">
        <div class="container">

            <div class="row justify-content-center">

                    @if (isset($products) && $products->count() > 0)

                        @foreach ($products as $product)
                            <div class="col-lg-4 col-md-6  col-sm-6 col-sm-6">
                                <div class="blog-item-single">
                                    <div class="blog-item-img">
                                        <img src="{{ asset($product->image) }}" style="height: 200px !important;width:300px;" alt="Blog Image" />
                                        <div class="tag">
                                            <span>{{ $product->created_at->format('d') }}</span>
                                            <span>{{ $product->created_at->format('M') }}</span>
                                        </div>
                                        <div class="overlay-content">
                                            <a href="#"><i class="flaticon-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-item-content">
                                        <h3><a href="{{ route('front.productSingle', $product->slug) }}">{{ $product->title }}</a></h3>
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
