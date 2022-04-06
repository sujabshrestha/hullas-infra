@extends('frontEnd.layout.master')


@section('content')
<div class="page-nav row">
    <div class="container">
        <div class="row">
            <h2>Who We Are ? Global Assistance Alliences</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Who We Are</li>
            </ul>
        </div>
    </div>
</div>
<div class="about-us-wrap" style="background-image: url('/assets/images/pharmacy.png');">
    <div class="about-us">
        <div class="container">
            @isset($whoweares)
            @foreach ($whoweares as $whoweare)

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset($whoweare->image) ?? '' }}" alt="">
                </div>
                <div class="col-md-6 col-sm-12">
                    {!! $whoweare->post_content  ?? '' !!}


                </div>
            </div>
            @endforeach
            @endisset

        </div>
    </div>
</div>




@endsection
