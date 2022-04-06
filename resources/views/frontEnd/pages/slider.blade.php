<div class="home-banner-area banner-three">
    <div class="container-fluid">
        <div class="banner-slider owl-carousel">
            @if (isset($sliders) && !empty($sliders))
            @foreach ($sliders as $slider)


            <div class="slider-item" style="background-image: url('{{ $slider->image }}'); height:800px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="banner-content">
                                <h1>
                                    {{ $slider->title }}
                                </h1>
                                {!! $slider->post_content !!}
                                <div class="cta-btn">
                                    <a href="{{ route('front.allservices') }}" class="primary-btn">Explore Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</div>
