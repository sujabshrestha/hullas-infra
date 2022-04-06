@extends('frontEnd.layout.master')

@push('style')
<link rel="stylesheet" href="{{ asset('front/assets/faq.css') }}">
@endpush

@section('content')

    <div class="content">
        <div class="faq">
            <div class="container">
                <div class="main-title">
                    FAQ
                </div>
                <div class="faq-content">
                    @if(isset($faqs) && $faqs->count() > 0)
                    @foreach($faqs as $faq)
                        <button class="accordion">{{$faq->title}}</button>
                        <div class="panel">
                            <p>{!! $faq->post_content !!}</p>
                        </div>
                    @endforeach
                    @else
                        <h5>No faqs added.</h5>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>

@endpush