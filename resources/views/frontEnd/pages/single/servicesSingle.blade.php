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
				<img src="assets/img/page-title/service-details-bg.jpg" alt="Demo Image">
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
                                    <li class="active">
										<a href="#">Architecture & Building</a>
										<i class="flaticon-play-button"></i>
                                    </li>
                                    <li>
										<a href="#">Building Construction</a>
										<i class="flaticon-play-button"></i>
                                    </li>
                                    <li>
										<a href="#">Painting & Tiling</a>
										<i class="flaticon-play-button"></i>
                                    </li>
                                    <li>
										<a href="#">Building Consultants</a>
										<i class="flaticon-play-button"></i>
									</li>
									<li>
										<a href="#">Design Planning</a>
										<i class="flaticon-play-button"></i>
                                    </li>
                                </ul>
							</div>

                        </aside>
					</div>
					<div class="col-lg-8 col-md-12">
						<div class="service-details-desc">
							<div class="content">
                                <h2>Building <span>Multistoried</span> Is Really A Challenging Work</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                    lacus vel facilisis.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                </p>
							</div>
							<div class="services-area">
								<div class="row align-items-center">
									<div class="col-lg-6">
										<div class="image">
											<img src="{{ asset($service->image) }}" alt="Demo Image">
										</div>
									</div>
									<div class="col-lg-6 pl-0">
										<div class="content">
											<div class="item-list">
												<ul>
                                                    <li><i class="flaticon-play-button"></i> 100% Satisfaction Guarantee.</li>
                                                    <li><i class="flaticon-play-button"></i> Accurate Testing Processes.</li>
                                                    <li><i class="flaticon-play-button"></i> 35+ Years Of Experience. </li>
                                                    <li><i class="flaticon-play-button"></i> Strong Building Materials.</li>
                                                    <li><i class="flaticon-play-button"></i> Eco-Friendly Build Materials.</li>
                                                </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                    lacus vel facilisis do eiusmod.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                </p>
							</div>
                           
                        </div>
					</div>
				</div>
            </div>
        </div>
        <!-- end service details area -->

@endsection
