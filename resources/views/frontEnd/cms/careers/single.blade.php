@extends('frontEnd.layout.master')

@push('style')
@endpush

@section('content')
    <div class="page-section container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title">
                    {{ $career->title ?? '' }}
                    <div class="title-bar">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                @if($career->image)
                    <div class="notice-image">
                        <img src="{{ asset($career->image) }}" alt="notice-image" />
                    </div>
                @endif
                <div class="notice-description">
                    <div>
                        {!! $career->post_content ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush