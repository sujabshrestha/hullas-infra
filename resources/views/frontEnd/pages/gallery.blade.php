@extends('frontEnd.layout.master')


@section('content')
<div class="row mt-5 ">
    <div class="col-lg-12">
        <div class="card" style="padding-top:8%;">
            <div class="card-body ">
                <h4 class="card-title text-center mt-4 mb-4" style="font-size: 34px;">{{ $gallery->title }}</h4>
                <p class="card-text mb-4" style="font-size: 16px;"> Images of {{ $gallery->title }} Album </p>
                <div class="row">
                    @foreach ($gallery->galleries as $gal )
                    <div class="col-md-3">
                        <img src="{{ $gal->hasImage() ? asset($gal->image) : '' }}" style="height: 300px; width:300px;padding-right:10px;" alt="">
                    </div>
                    @endforeach
                </div>
                {{-- <div id="lightgallery" class="row lightGallery"> <a href="https://i.imgur.com/EEguU02.jpg" class="image-tile" data-abc="true"><img src="https://i.imgur.com/EEguU02.jpg" alt="image small"></a> <a href="https://i.imgur.com/Uv2Yqzo.jpg" class="image-tile" data-abc="true"><img src="https://i.imgur.com/Uv2Yqzo.jpg" alt="image small"></a> <a href="https://i.imgur.com/xbTAITF.jpg" class="image-tile" data-abc="true"><img src="https://i.imgur.com/xbTAITF.jpg" alt="image small"></a> <a href="https://i.imgur.com/EEguU02.jpg" class="image-tile" data-abc="true"><img src="https://i.imgur.com/EEguU02.jpg"></a> </div> --}}
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')

@endpush
