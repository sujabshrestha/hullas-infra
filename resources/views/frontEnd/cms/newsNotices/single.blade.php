@extends('frontEnd.layout.master')

@push('style')
@endpush

@section('content')
    <div class="page-section container">
        <div class="row">
            <div class="col-md-8">
                <div class="page-title">
                    {{ $notice->title ?? '' }}
                    <div class="title-bar">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                @if($notice->image)
                <div class="notice-image">
                    <img src="{{ asset($notice->image) }}" alt="notice-image" />
                </div>
                @endif
                <div class="notice-description">
                    <div>
                        {!! $notice->post_content ?? '' !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="sidebar-title">
                        अन्य सूचना र सन्देशहरू
                        <div class="title-bar">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <ul>
                        @if(isset($recentNotices) && $recentNotices->count() > 0)
                            @foreach($recentNotices as $notice)
                                <li>
                                    <a href="{{ route('front.singleNotice',[$notice->id]) }}">
                                        {{ $notice->title }}
                                    </a>
                                </li>
                            @endforeach
                        @else
                            <li>
                                <a href="#">No news.</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush