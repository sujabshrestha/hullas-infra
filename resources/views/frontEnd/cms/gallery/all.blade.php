@extends('frontEnd.layout.master')

@push('style')
@endpush

@section('content')

    <div class="gallery-container">
        <div class="about-page-title">
            ग्यालरी
        </div>
        <div class="container">
            <div class="row">
                @foreach($albums as $album)
                    <div class="col-md-4">
                    <div class="album-container">
                        <a href="{{ route('front.gallery.single',$album->id) }}">
                            <div class="img-container">
                                <img src="{{ asset($album->image) }}" alt="" />
                            </div>
                            <div class="overlay">
                                <div class="view">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="album-title">
                        {{ $album->title }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@push('script')
@endpush