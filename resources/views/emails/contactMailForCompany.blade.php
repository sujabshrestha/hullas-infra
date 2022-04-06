@component('mail::message')

@section('mailLogo')
    <img style="max-height:100px;" src="{{ asset(getSiteSetting('logo')) ?? '' }}" alt="">
@endsection


Dear {{ getSiteSetting('title') ?? 'Hulas Infra' }}, <br>
You have new message from {{ $details['name'] }}.
@component('mail::panel')
Email : {{ $details['email'] }} <br>
Message : {{ $details['message'] }} <br>
Phone: {{ $details['phone'] }} <br>
Address : {{ $details['address'] }} <br>
@endcomponent

Thank You

@endcomponent
