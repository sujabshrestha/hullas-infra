@extends('frontEnd.layout.master')

@push('style')
@endpush

@section('content')

    <div class="page-section container">
        <div class="row">
            <div class="col-md-8">
                <div class="page-title">
                    प्रतिबेदनहरु
                    <div class="title-bar">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <div class="page-content">
                    <ul>
                        @if(isset($reports) && $reports->count() > 0)
                            @foreach($reports as $report)
                                <li>
                                    <a href="{{ route('front.singleReport',[$report->id]) }}">
                                        {{ $report->title ?? '' }}
                                    </a>
                                    <div class="date">
                                        <i class="fa fa-calendar-alt"></i>&nbsp;
                                        मिति: <span class="nepali-date" data-date="{{ $report->created_at->format('Y-m-d') }}"></span>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="sidebar-title">
                        सूचना र सन्देशहरू
                        <div class="title-bar">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <ul>
                        @if(isset($recentNewsNotices) && $recentNewsNotices->count() > 0)
                            @foreach($recentNewsNotices as $notice)
                                <li>
                                    <a href="{{ route('front.singleNotice',[$notice->id]) }}">
                                        {{ $notice->title }}
                                    </a>
                                </li>
                            @endforeach
                        @else
                            <li>
                                <a href="#"></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')

    <script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v3.2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        var conversions = $('.nepali-date');
        conversions.each(function () {
            var ad = $(this).attr('data-date');
            var bs = NepaliFunctions.AD2BS({year: ad.substring(0,4), month: ad.substring(5,7), day: ad.substring(8,10)})
            var unicode_bs = NepaliFunctions.ConvertToUnicode(bs.year)+'-'
                + NepaliFunctions.ConvertToUnicode(bs.month)+'-'
                + NepaliFunctions.ConvertToUnicode(bs.day);
            $(this).html(unicode_bs);
        })
    </script>

@endpush