@extends('frontEnd.layout.master')

@push('style')
@endpush

@section('content')


    <div class="page-section container">

        <div class="page-title">
            {{ $post->title ?? '' }}
            <div class="title-bar">
                <span></span><span></span><span></span>
            </div>
        </div>
        <div class="single-servicce-page">
            <div class="row">
                <div class="col-md-4">
                    <div class="img-container">
                        {!! gobalPostImage($post->id, 'full', 'img-fluid') !!}
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="description">
                        {!! $post->post_content ?? '' !!}
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection

@push('script')
@endpush

