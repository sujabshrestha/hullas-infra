@component('mail::message')

@section('mailLogo')
    <img style="max-height:100px;" src="{{ asset(getSiteSetting('logo')) ?? '' }}" alt="">
@endsection


Dear {{ getSiteSetting('title') ?? 'Hulas Infra' }}, <br>
You have new career mail from {{ $details['name'] }}.
@component('mail::panel')
Name: {{ $details['name'] }} <br>
Email : {{ $details['email'] }} <br>
Phone : {{ $details['phone'] }} <br>
CV: <a href="{{ asset($details['cv']) }}">Preview</a> <br>
@endcomponent

Thank You

@endcomponent
