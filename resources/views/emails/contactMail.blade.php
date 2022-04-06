@component('mail::message')

@section('mailLogo')
    <img style="max-height:100px;" src="{{ asset(getSiteSetting('logo')) ?? '' }}" alt="">
@endsection


Dear {{ $details['name'] }}, <br>
Your message has been delivered.
@component('mail::panel')
{{-- Email : {{ $details['email'] }} <br> --}}
Message: {{ $details['message'] }} <br>
{{-- Address: {{ $details['address'] }} <br> --}}
@endcomponent




Thank You

@endcomponent
