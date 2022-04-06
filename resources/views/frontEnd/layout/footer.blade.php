  <!-- start footer area -->
  <footer class="footer-area pt-100 pb-70 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                <div class="footer-widget">
                    <div class="navbar-brand">
                        <a href="index.html">
                            <img src="{{ getSiteSetting('logo') ?? '' }}" alt="Logo" />
                        </a>
                    </div>
                    <p>You can dream, create, design, and build the most wonderful place in the world.</p>
                    <div class="social-link">
                        <a href="#" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-tumblr"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                <div class="footer-widget">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li>
                            <i class="flaticon-play-button"></i>
                            <a href="{{ route('front.about-us') }}">About Us</a>
                        </li>
                        <li>
                            <i class="flaticon-play-button"></i>
                            <a href="{{ route('front.allservices') }}">Services</a>
                        </li>
                        <li>
                            <i class="flaticon-play-button"></i>
                            <a href="{{ route('front.allblogs') }}">Blogs</a>
                        </li>
                        <li>
                            <i class="flaticon-play-button"></i>
                            <a href="{{ route('front.allnews') }}">News</a>
                        </li>
                        <li>
                            <i class="flaticon-play-button"></i>
                            <a href="{{ route('front.allwhitepapers') }}">White Papers</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                <div class="footer-widget">
                    <h5>Recent News</h5>
                    <ul class="footer-news">
                        @php
                            $allNews = returnGobalPost(1);
                        @endphp

                        @if (isset($allNews) && $allNews->count() > 0)
                        @foreach ($allNews as $news)


                        <li class="content">
                            <div class="img">
                                <a href="{{ route('front.newsSingle', $news->slug) }}"><img src="{{ asset($news->image) }}" alt="Demo Image"></a>
                            </div>
                            <span><a href="{{ route('front.newsSingle', $news->slug) }}">{{ $news->title }}</a></span>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                <div class="footer-widget">
                    <h5>Contacts</h5>
                    <ul class="contact-info">
                        <li class="content">
                            <span class="tag">A</span>
                            <span>{{ getSiteSetting('address') }}</span>
                        </li>
                        <li class="content">
                            <span class="tag">P</span>
                            <span>
                                <a href="tel:(009)01361246725">{{ getSiteSetting('primary_phone') }}</a>
                                <a href="tel:(009)01361246116">{{ getSiteSetting('secondary_phone') }}</a>
                            </span>
                        </li>
                        <li class="content">
                            <span class="tag">E</span>
                            <span>
                                <a href="mailTo:hello@Constik.com">{{ getSiteSetting('primary_email') }}</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer area -->

<!-- start copy right area -->
<div class="copy-right-area">
    <div class="container">
        <div class="copy-right-content">
            <p>
                Copyright @2020 Constik. Designed By
                <a href="https://hibootstrap.com/" target="_blank">
                    HiBootstrap.com
                </a>
            </p>
        </div>
    </div>
</div>
<!-- end copy right area-->
