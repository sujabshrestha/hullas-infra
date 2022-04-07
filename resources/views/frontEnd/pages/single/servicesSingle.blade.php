@extends('frontEnd.layout.master')


@section('content')
		<!-- start page title area-->
        <div class="page-title-area ptb-100">
            <div class="container">
                <div class="page-title-content">
                    <h1>Services Details</h1>
                    <ul>
                        <li class="item"><a href="index.html">Home</a></li>
                        <li class="item"><a href="services-details.html"><i class="flaticon-play-button"></i>Services Details</a></li>
                    </ul>
                </div>
			</div>
			<div class="bg-image">
                <img src="{{ asset('front/assets/images/about-bg.jpg') }}" alt="Demo Image">
            </div>

        </div>
        <!-- end page title area -->

        <!-- start service details area -->
        <div class="service-details-area pt-100 pb-70">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12">
						<aside class="widget-area">
                            <div class="widget">
                                <ul class="nav-list">
                                    @if (isset($otherservices) && $otherservices->count() > 0)
                                    @foreach ($otherservices as $otherservice)
                                    <li>
										<a href="{{ route('front.servicessingle', $otherservice->slug) }}">{{ $otherservice->title }}</a>
										<i class="flaticon-play-button"></i>
                                    </li>
                                    @endforeach
                                    @endif


                                </ul>
							</div>

                        </aside>
					</div>
					<div class="col-lg-8 col-md-12">
						<div class="service-details-desc">
							<div class="content">
                                <h2>{{ $service->title }}</h2>
                                {!! Str::limit(strip_tags($service->post_content), 240)  !!}
							</div>
							<div class="services-area">
								<div class="row align-items-center">
									<div class="col-lg-12">
										<div class="image">
											<img src="{{ asset($service->image) }}" alt="Demo Image">
										</div>
									</div>

								</div>
							</div>

                        </div>
					</div>
				</div>
            </div>
        </div>
        <!-- end service details area -->

@endsection
