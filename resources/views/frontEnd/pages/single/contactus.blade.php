@extends('frontEnd.layout.master')


@section('content')
<!-- start page title area-->
<div class="page-title-area ptb-100">
    <div class="container">
        <div class="page-title-content">
            <h1>Contact Us</h1>
            <ul>
                <li class="item"><a href="index.html">Home</a></li>
                <li class="item"><a href="contact.html"><i class="flaticon-play-button"></i>Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-image">
        <img src="{{ asset('front/assets/images/about-bg.jpg') }}" alt="Demo Image">
    </div>

</div>
<!-- end page title area -->

<!-- start contact  area -->
<div class="contact-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info">
                    <div class="info-item" style="background: url('{{ asset('front/assets/images/contact/item-bg-1.jpg') }}')">
                        <i class='flaticon-smartphone'></i>
                        <div class="info-content">
                            <p>call us</p>
                            <a href="tel:+14854560102">(009) 01361246741 </a>
                        </div>
                    </div>
                    <div class="info-item" style="background: url('{{ asset('front/assets/images/contact/item-bg-2.jpg') }}')">
                        <i class='flaticon-email'></i>
                        <div class="info-content">
                            <p>mail us</p>
                            <a href="mailto:hello@constik.com">hello@constik.com</a>
                        </div>
                    </div>
                    <div class="info-item" style="background: url('{{ asset('front/assets/images/contact/item-bg-3.jpg') }}')">
                        <i class='flaticon-address'></i>
                        <div class="info-content">
                            <p>visit us</p>
                            <a href="#">32,Wales Street,USA</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-form">
                    <div class="content">
                        <h3>Get In touch</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus totam minima quam a ab cumque eos nulla eaque animi non natus totam minima quam.</p>
                    </div>
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
        </div>
        <div class="row">
            <div class="col-12">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14823.53387790955!2d-74.10481152434619!3d40.63980156434487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24e10d24b9eb3%3A0xdbac10f1e9c9180b!2s32%20Wales%20Pl%2C%20Staten%20Island%2C%20NY%2010310%2C%20USA!5e0!3m2!1sen!2sbd!4v1602133511419!5m2!1sen!2sbd"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact area -->
@endsection
