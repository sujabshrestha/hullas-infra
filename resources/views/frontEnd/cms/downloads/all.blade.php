@extends('frontEnd.layout.master')

@push('style')
@endpush

@section('content')

    <div class="page-section container">
        <div class="row">
            <div class="col-md-8">
                <div class="page-title">
                    डाउनलोड्स
                    <div class="title-bar">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <div class="page-content">
                    <ul>
                        @if(isset($downloads) && $downloads->count() > 0)
                            @foreach($downloads as $download)
                                <li>
                                    <a target="__blank" href="{{ $download->file ? asset($download->file) : '#' }}"> सेवाको मापदण्ड, गुणस्तर र महसुलसम्बन्ध</a>
                                </li>
                            @endforeach
                        @endif
                        {{--<li>--}}
                            {{--<a href="">--}}
                                {{--नवीकरणीय र वैकल्पिक ऊर्जाको उपयोग, गुणस्तर र मापदण्ड;</a--}}
                            {{-->--}}
                            {{--<div class="date">--}}
                                {{--<i class="fa fa-calendar-alt"></i> मिति: २०७६।१२।११--}}

                            {{--</div>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>

        </div>
    </div>

@endsection

@push('script')
@endpush