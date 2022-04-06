@component('mail::message')

@section('mailLogo')
    <img style="max-height:100px;" src="{{ asset(getSiteSetting('logo')) ?? '' }}" alt="">
@endsection

@php
    $url = asset($details['file']);
@endphp

Dear {{ $details['name'] }}, <br>

@component('mail::panel')
Email : {{ $details['mailfrom'] }} <br>
Service : {{ $details['service'] }} <br>
Passport Number : {{ $details['passportnumber'] }} <br>
Phone Number : {{ $details['phoneNumber'] }} <br>
Nationality : {{ $details['nationality'] }} <br>
File :  <a href="{{ asset(getSiteSetting('logo')) ?? '' }}" target="_blank" type="button">preview</a>
@endcomponent




Thank You

@endcomponent
