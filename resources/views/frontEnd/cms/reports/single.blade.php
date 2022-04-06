@extends('frontEnd.layout.master')

@push('style')
@endpush

@section('content')
    <div class="page-section container">
        <div class="row">
            <div class="col-md-8">
                <div class="page-title">
                    {{ $report->title ?? '' }}
                    <div class="title-bar">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                @if($report->file)
                    <div class="">
                        <iframe src="{{ asset($report->file) }}" style="width:100%; height:800px" frameborder="0"></iframe>
                    </div>
                @endif

                <div class="notice-description">
                    <div>
                        {!! $report->post_content ?? '' !!}
                    </div>
                </div>

                @if($report->image)
                    <div class="notice-image">
                        <img src="{{ asset($report->image) }}" alt="notice-image" />
                    </div>
                @endif
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="sidebar-title">
                        अन्य प्रतिबेदनहरु
                        <div class="title-bar">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <ul>
                        @if(isset($recentReports) && $recentReports->count() > 0)
                            @foreach($recentReports as $report)
                                <li>
                                    <a href="{{ route('front.singleReport',[$report->id]) }}">
                                        {{ $report->title }}
                                    </a>
                                </li>
                            @endforeach
                        @else
                            <li>
                                <a href="#">No reports.</a>
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