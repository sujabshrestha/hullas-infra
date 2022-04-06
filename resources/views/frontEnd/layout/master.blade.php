<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Author: HiBootstrap, Category: Construction, Multipurpose, HTML, SASS, Bootstrap" />
        <!-- title -->
        <title>{{ getSiteSetting('title') ?? 'Hulas' }}</title>
        <!-- bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}" />
        <!-- fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome.css') }}"/>
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="{{ asset('front/assets/css/flaticon.css') }}" />
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{ asset('front/assets/css/animate.min.css') }}" />
        <!-- nice select CSS -->
        <link rel="stylesheet" href="{{ asset('front/assets/css/nice-select.css') }}">
        <!-- magnific popup CSS -->
        <link rel="stylesheet" href="{{ asset('front/assets/css/magnific-popup.min.css') }}" />
        <!-- owl-carousel CSS -->
		<link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.min.css') }}" />
        <!-- mean-menu CSS -->
        <link rel="stylesheet" href="{{ asset('front/assets/css/meanmenu.min.css') }}" />
        <!-- main style CSS -->
        <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}" />
        <!-- responsive CSS -->
        <link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css') }}" />
        <!-- favicon -->
        <link rel="icon" href="{{ asset('front/assets/img/favicon.png') }}" type="image/png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>

    @include('frontEnd.layout.preloader')

    @include('frontEnd.layout.header')



    @yield('content')

    @include('frontEnd.layout.footer')

     <!-- jquery JS -->
     <script src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
     <!-- popper JS -->
     <script src="{{ asset('front/assets/js/popper.min.js') }}"></script>
     <!-- bootstrap JS -->
     <script src="{{ asset('front/') }}assets/js/bootstrap.min.js"></script>
     <!-- nice select JS -->
     <script src="{{ asset('front/assets/js/jquery.nice-select.min.js') }}"></script>
     <!-- magnific popup JS -->
     <script src="{{ asset('front/assets/js/jquery.magnific-popup.min.js') }}"></script>
     <!-- waypoints js -->
     <script src="{{ asset('front/assets/js/jquery.waypoints.js') }}"></script>
     <!-- counter js -->
     <script src="{{ asset('front/assets/js/counter-up.js') }}"></script>
     <!-- owl carousel JS -->
     <script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>
     <!-- mean menu JS -->
     <script src="{{ asset('front/assets/js/meanmenu.min.js') }}"></script>
     <!-- form validator -->
     <script src="{{ asset('front/assets/js/form-validator.min.js') }}"></script>
     <!-- contact form JS -->
     <script src="{{ asset('front/assets/js/contact-form-script.js') }}"></script>
     <!-- ajax chimp JS -->
     <script src="{{ asset('front/assets/js/jquery.ajaxchimp.min.js') }}"></script>
     <!-- script JS -->
     <script src="{{ asset('front/assets/js/script.js') }}"></script>
 </body>
</html>
