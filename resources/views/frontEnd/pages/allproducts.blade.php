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
            <img src="{{ asset('front/assets/images/about-bg.jpg') }}" alt="Demo Image">
        </div>

    </div>
    <!-- end page title area -->

    <section class="best-service-section service-two ptb-100">
        <div class="container">
            <div class="section-title style-two">
                <h2 class="color-secondary">We Provide Best <span>Products</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="row">
                @if (isset($productCategories) && !empty($productCategories))
                @foreach ($productCategories as $category)
                <div class="col-lg-4">
                    <div class="service-item-single">
                        <img src="{{ asset($category->image) }} " alt="Icon">
                        <h3><a href="services-details.html">{{ $category->title }}</a></h3>
                        {{-- {!! Str::limit(strip_tags($category->post_content), 20, '...')  !!} --}}
                        <div class="cta-btn">
                            <a href="{{ route('front.productFromCategory', $category->id) }}" class="read-more-btn"><i class="flaticon-play-button"></i> Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

        </div>
    </section>

    {{-- <div class="blog-grid ptb-100">
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
  --}}



@endsection

@push('script')
@endpush
