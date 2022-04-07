<header class="header-area header-three">
    <!-- start top header area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-12">
                    <div class="social-link">
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 p-0">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-sm-4 p-0">
                            <div class="contact-info">
                                <div class="contact-info-content">
                                    <p>call us:</p>
                                    <a href="tel:+14854560102">{{ getSiteSetting('primary_phone') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 p-0">
                            <div class="contact-info">
                                <div class="contact-info-content">
                                    <p>mail us:</p>
                                    <a href="mailto:hello@constik.com">{{ getSiteSetting('primary_email') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 p-0">
                            <div class="contact-info">
                                <div class="contact-info-content">
                                    <p>Open Hours:</p>
                                    <a href="#">Mon-Fri: 8 am – 7 pm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end top header area -->

    <!-- start navbar area -->
    <div class="main-navbar-area">
        <div class="constik-responsive-nav">
            <div class="container">
                <div class="constik-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/img/logo-dark.png" alt="logo">
                        </a>
                    </div>
                    <div class="side-option-responsive">
                        <div class="item">
                            <div class="language">
                                <a href="#language" class="language-link">
                                    Language <i class="fas fa-sort-down"></i></a>
                                <ul class="menu">
                                    <li class="menu-item"><a href="#" class="menu-link">
                                        <img src="assets/img/flag-uk.png" alt="flag">
                                        English</a>
                                    </li>

                                    <li class="menu-item"><a href="#" class="menu-link">
                                        <img src="assets/img/flag-germany.png" alt="flag">
                                        Deutsch</a>
                                    </li>

                                    <li class="menu-item"><a href="#" class="menu-link">
                                        <img src="assets/img/flag-jordan.png" alt="flag">
                                        العربية</a>
                                    </li>

                                    <li class="menu-item"><a href="#" class="menu-link">
                                        <img src="assets/img/flag-china.png" alt="flag">
                                        中文</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <div class="search">
                                <a href="#search-box" class="search-button" data-effect="mfp-zoom-in">
                                    <i class="flaticon-loupe"></i>
                                </a>
                                <div class="search-box mfp-with-anim mfp-hide" >
                                    <form class="search-form">
                                        <input class="search-input" name="search" placeholder="Search" type="text">
                                        <a class="primary-btn">
                                          <i class="flaticon-loupe"></i>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="constik-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse mean-menu">
                        <a href="{{ url('/') }}" class="navbar-brand">
                            <img src="{{ asset(getSiteSetting('logo')) ?? '' }}" style="max-height: 50px !important;" alt="Logo">
                        </a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ url('/') }}" class="nav-link">Home</a>


                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link toggle">About Us</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('front.about-us') }}" class="nav-link">Company Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('front.allcasestudies') }}" class="nav-link">Case Study</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('front.career') }}" class="nav-link">Career</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('front.privacyPolicy') }}" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('front.termsOfService') }}" class="nav-link">Terms Of Service</a>
                                    </li>
                                </ul>

                            </li>

                            <li class="nav-item">
                                <a href="{{ route('front.allservices') }}" class="nav-link">Services</a>

                            </li>
                            <li class="nav-item">
                                <a href="{{ route('front.allproducts') }}" class="nav-link">Products</a>

                            </li>
                            <li class="nav-item"><a href="#" class="nav-link toggle">Resources</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('front.allblogs') }}" class="nav-link">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('front.allnews') }}" class="nav-link">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('front.allwhitepapers') }}" class="nav-link">Whitepaper</a>
                                    </li>
                                </ul>
                            </li>



                            <li class="nav-item">
                                <a href="{{ route('front.contact') }}" class="nav-link">Contact</a>
                            </li>
                        </ul>

                        <div class="side-option ml-auto">
                            {{-- <div class="item">
                                <div class="language">
                                    <a href="#language" class="language-link">
                                        Language <i class="fas fa-sort-down"></i></a>
                                    <ul class="menu">
                                        <li class="menu-item"><a href="#" class="menu-link">
                                            <img src="assets/img/flag-uk.png" alt="flag">
                                            English</a>
                                        </li>

                                        <li class="menu-item"><a href="#" class="menu-link">
                                            <img src="assets/img/flag-germany.png" alt="flag">
                                            Deutsch</a>
                                        </li>

                                        <li class="menu-item"><a href="#" class="menu-link">
                                            <img src="assets/img/flag-jordan.png" alt="flag">
                                            العربية</a>
                                        </li>

                                        <li class="menu-item"><a href="#" class="menu-link">
                                            <img src="assets/img/flag-china.png" alt="flag">
                                            中文</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}

                            <div class="item">
                                <div class="search">
                                    <a href="#search-box" class="search-button" data-effect="mfp-zoom-in">
                                        <i class="flaticon-loupe"></i>
                                    </a>
                                    <div class="search-box mfp-with-anim mfp-hide" id="search-box">
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">
                                            <a class="primary-btn">
                                              <i class="flaticon-loupe"></i>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="cta-btn">
                                    <a href="{{ route('front.contact') }}" class="primary-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- end navbar area -->
</header>
