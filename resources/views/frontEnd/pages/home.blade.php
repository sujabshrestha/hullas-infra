@extends('frontEnd.layout.master')

@section('content')
@include('frontEnd.pages.slider')
<!-- start about section -->
@include('frontEnd.pages.aboutus')

<!-- end about section -->

<!-- start our works section -->

<!-- end our works section -->

<!-- start best service section -->

<section class="strong-service-section pt-100 pb-70" style="background-image: url(' {{ asset('front/assets/images/service-bg-1.jpg') }}    ">
    <div class="container">
        <div class="row no-wrap">
            <div class="col-lg-5 col-md-12">
                <div class="service-content">
                    <h2>We Provide Strong Services For You</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Lorem ipsum dolor sit amet consectetur.</p>
                    <div class="cta-btn">
                        <a href="{{ route('front.allservices') }}" class="primary-btn">Explore All Services</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-auto col-md-12 pr-0">
                <div class="strong-service-slider owl-carousel">
                    @if (isset($ourservices) && !empty($ourservices))
                    @foreach ($ourservices as $ourservice)
                    <div class="slider-item">
                        <img src="{{ asset($ourservice->image) }}" style="height: 200px;" alt="Icon">
                        <h3><a href="{{ route('front.servicessingle', $ourservice->slug) }}">{{ $ourservice->title }}</a></h3>
                        {!! $ourservice->post_content !!}
                        <div class="cta-btn">
                            <a href="{{ route('front.servicessingle', $ourservice->slug) }}" class="read-more-btn"><i class="flaticon-play-button"></i> Read More</a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>



<!-- end best service section -->

{{-- cagegory section --}}
<section class="best-service-section service-two ptb-100">
    <div class="container">
        <div class="section-title style-two">
            <h2 class="color-secondary">We Provide Best <span>Products</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row">
            @if (isset($categories) && !empty($categories))
            @foreach ($categories as $category)
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
        <div class="cta-btn text-center">
            <a href="{{ route('front.allproducts') }}" class="primary-btn">Explore All products</a>
        </div>
    </div>
</section>

<section class="blog-section ptb-100 bg-secondary">
    <div class="container">
        <div class="section-title">
            <h2>Read Our Blogs To Have A Clear Knowledge About Us</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="blog-slider owl-carousel">
                    @if (isset($blogs) && !empty($blogs) )
                    @foreach ($blogs as  $blog)
                    <div class="slider-item">
                        <div class="blog-item-single">
                            <div class="blog-item-img">
                                <img src="{{ asset($blog->image) }}" style="
                                height: auto;
                                object-fit: cover;" alt="Blog Image" />
                                <div class="overlay-content">
                                    <a href="blog-details.html"><i class="flaticon-add"></i></a>
                                </div>
                            </div>
                            <div class="blog-item-content">
                                <h3><a href="{{ route('front.newsSingle', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                {!! Str::limit(strip_tags($blog->post_content), 70)  !!}
                                <div class="cta-btn mt-2">
                                    <a href="{{ route('front.newsSingle', $blog->slug) }}" class="read-more-btn"><i class="flaticon-play-button"></i> Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="cta-btn text-center">
                    <a href="{{ route('front.allblogs') }}" class="primary-btn">Explore All BLogs</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- start quote section -->
<section class="quote-section pt-100 pb-70" style="background-image: url('{{ asset('front/assets/images/testimonial-bg.jpg') }}')">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <div class="contact-form">
                    <h2 class="color-secondary">Contact <span>Us</span></h2>
                    <form method="POST" action="{{ route('front.submitContact') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" required=""
                                    data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" required=""
                                    data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control" id="phone" required=""
                                    data-error="Please enter your phone number" placeholder="Phone No">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" id="address" required=""
                                        data-error="Please enter your address" placeholder="Address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="message" class="form-control" id="message" required=""
                                        data-error="Please enter your message" placeholder="Message">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                              <button type="submit" class="primary-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image">
                    <img src="{{ asset('front/assets/images/quote-img.png') }}" alt="Demo Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end quote section -->





@endsection
