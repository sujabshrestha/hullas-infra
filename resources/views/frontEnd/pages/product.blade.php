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

            <div class="row">
                @if (isset($pebs) && $pebs->count() > 0)
                    @foreach ($pebs as $peb)
                        <div class="col-lg-4">
                            <div class="service-item-single">
                                <img src="{{ asset($peb->image) }} " style="height: 200px;" alt="Icon">
                                <h3><a href="{{ route('front.productSingle', $peb->slug) }}">{{ Str::limit($peb->title, 20, '...')  }}</a></h3>
                                {{-- {!! Str::limit(strip_tags($category->post_content), 20, '...')  !!} --}}
                                <div class="cta-btn">
                                    <a href="{{ route('front.productSingle', $peb->slug) }}" class="read-more-btn"><i
                                            class="flaticon-play-button"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @elseif (isset($structuralpipes) && $structuralpipes->count() > 0)
                    @foreach ($structuralpipes as $structuralpipe)
                        <div class="col-lg-4">
                            <div class="service-item-single">
                                <img src="{{ asset($structuralpipe->image) }} " style="height: 200px;" alt="Icon">
                                <h3><a href="{{ route('front.productSingle', $structuralpipe->slug) }}">{{ Str::limit($structuralpipe->title, 20, '...')  }}</a></h3>
                                {{-- {!! Str::limit(strip_tags($category->post_content), 20, '...')  !!} --}}
                                <div class="cta-btn">
                                    <a href="{{ route('front.productSingle', $structuralpipe->slug) }}"
                                        class="read-more-btn"><i class="flaticon-play-button"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @elseif(isset($hrgalvanizings) && $hrgalvanizings->count() > 0)
                    @foreach ($hrgalvanizings as $hrgalvanizing)
                        <div class="col-lg-4">
                            <div class="service-item-single">
                                <img src="{{ asset($hrgalvanizing->image) }} " style="height: 200px;" alt="Icon">
                                <h3><a href="{{ route('front.productSingle', $hrgalvanizing->slug) }}">{{ Str::limit($hrgalvanizing->title, 20, '...')  }}</a></h3>
                                {{-- {!! Str::limit(strip_tags($category->post_content), 20, '...')  !!} --}}
                                <div class="cta-btn">
                                    <a href="{{ route('front.productSingle', $hrgalvanizing->slug) }}"
                                        class="read-more-btn"><i class="flaticon-play-button"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    @if (isset($products) && $products->count() > 0)

                        @foreach ($products as $product)
                            <div class="col-lg-4">
                                <div class="service-item-single">
                                    <img src="{{ asset($product->image) }} " style="height: 200px;" alt="Icon">
                                    <h3><a href="{{ route('front.productSingle', $product->slug) }}">{{ Str::limit($product->title, 20, '...')  }}</a></h3>
                                    {{-- {!! Str::limit(strip_tags($category->post_content), 20, '...')  !!} --}}
                                    <div class="cta-btn">
                                        <a href="{{ route('front.productSingle', $product->slug) }}"
                                            class="read-more-btn"><i class="flaticon-play-button"></i> Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endif
            </div>

        </div>
    </section>

    <!-- start blog area -->


@endsection

@push('script')
@endpush
