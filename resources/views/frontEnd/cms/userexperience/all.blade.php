@extends('frontEnd.layout.master')

@push('style')
@endpush

@section('content')

    <div class="service-page">

        <div class="container ">
            <div class="row">
                <div class="col-md-12">

                    <div class="container">
                        <div class="row">
                            @if(isset($userExperiences) && $userExperiences->count() > 0)
                                @foreach($userExperiences as $experience)
                                    <div class="col-md-4 col-6">
                                        <a href="{{ route('front.singleUserExperience', $experience->id) }}" class="service-item">
                                            <div class="img-container">
                                                {!! gobalPostImage($experience->id, 'full', 'img-fluid') !!}
                                            </div>
                                            <div class="title">
                                               {{ $experience->title }}
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-md-4 col-6">
                                    <h5>No Data Added.</h5>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
@endpush