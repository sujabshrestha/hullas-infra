
<section id="renovate" class="renovate-section pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="image-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="image">
                                <img src="{{ getSiteSetting('aboutus_image') ?? '' }}" alt="Demo Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="content">
                    {!! getSiteSetting('about_description') ?? '' !!}
                    <div class="cta-btn mt-2">
                        <a href="{{ route('front.about-us') }}" class="primary-btn">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
