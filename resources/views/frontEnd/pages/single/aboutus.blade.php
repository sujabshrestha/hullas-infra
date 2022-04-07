@extends('frontEnd.layout.master')


@section('content')
<div class="page-title-area ptb-100">
    <div class="container">
        <div class="page-title-content">
            <h1>About Us</h1>
            <ul>
                <li class="item"><a href="{{ route('front.home') }}">Home</a></li>
                <li class="item"><a href="{{ route('front.about-us') }}"><i class="flaticon-play-button"></i>About Us</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-image">
        <img src="{{ asset('front/assets/images/about-bg.jpg') }}" alt="Demo Image">
    </div>
</div>
<section id="about" class="about-section about-style-three pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="about-img-content">
                    <div class="row">

                        <div class="col-lg-12 col-sm-12 col-12">
                            <div class="about-image">
                                <img src=" {{ getSiteSetting('aboutus_image') ?? '' }}" alt="Demo Image">
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-content">
                    <h2 class="color-secondary">We Build Everything As Your <span>Dream</span></h2>
                    {!! getSiteSetting('about_description') ?? '' !!}

                </div>
            </div>
        </div>
    </div>
</section>
<!-- start team section -->
<section class="team-members-section ptb-100">
    <div class="container">
        <h3>Team Members</h3>
        <hr>
        <div class="row">

            @if (isset($teammembers) && !empty($teammembers))
            @foreach ($teammembers as $teammember)
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <div class="image">
                        <img src="{{ asset($teammember->image)  ?? ''}}" style="height: 200px; width:100%;" alt="Demo Image">
                    </div>
                    <div class="content">
                        <h3><a href="#">{{ $teammember->title }}</a></h3>
                        <span>{{ $teammember->designation }}</span>
                    </div>
                    <div class="overlay-content">
                        <div class="social-link">
                            <a href="{{ $teammember->facebooklink }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $teammember->twitterlink }}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-tumblr"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif


        </div>
    </div>
</section>
<!-- end team section -->

<section class="about-services-section pt-100 pb-70" style="background: url('{{ asset('front/assets/images/service-bg-1.jpg') }}')">
    <div class="container">
        <div class="row">
            @if (isset($goals) && !empty($goals))
            @foreach ($goals as $goal)
            <div class="col-lg-4">
                <div class="service-item-single">
                    {!! $goal->icon !!}
                    <h3><a href="#">{{ $goal->title }}</a></h3>
                    {!! $goal->post_content !!}
                </div>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</section>
@endsection
