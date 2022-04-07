@component('mail::message')

@section('mailLogo')
    <img style="max-height:100px;" src="{{ asset(getSiteSetting('logo')) ?? '' }}" alt="">
@endsection


Dear {{ $details['name'] }}, <br>
Your have successfully applied for your career.




Thank You

@endcomponent
