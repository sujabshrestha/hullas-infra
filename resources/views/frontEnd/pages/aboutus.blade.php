
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
                    <div class="item-list">
                        <ul>
                            <li><i class="flaticon-play-button"></i>100% Satisfaction Guarantee.</li>
                            <li><i class="flaticon-play-button"></i>  Accurate Testing Processes.</li>
                            <li><i class="flaticon-play-button"></i>  35+ Years Of Experience. </li>
                            <li><i class="flaticon-play-button"></i>  Strong Building Materials.</li>
                            <li><i class="flaticon-play-button"></i>  Eco Friendly Build Materials.</li>
                        </ul>
                    </div>
                    <p>You can dream, create, design and renovate the most place in the world. But it requires more peoples.</p>
                    <div class="cta-btn">
                        <a href="{{ route('front.about-us') }}" class="primary-btn">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
