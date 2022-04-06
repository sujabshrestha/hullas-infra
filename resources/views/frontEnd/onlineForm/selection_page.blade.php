@extends('frontEnd.layout.master')

@push('style')


@endpush

@section('content')

    <div class="open-form">
        <div class="form-header container">
            <div></div>
            <div class="header-items ">

                <div class="university">
                    हब को-ओपेरटिव सर्विस ली.
                </div>
                <div class="faculty">
                    भक्तिमार्ग, बालुवाटार, काठमाडौं, नेपाल
                </div>
                <div class="application">
                    अन्लाईन फारम
                </div>

            </div>
            <div></div>
        </div>
        <div class="form-content container">
            <div class="selection">
                
                <div class="section-wrap">
                    <div>
                        <div class="title">
                            Online Entry
                        </div>
                        <div class="button-container">
                            <a href="{{ route('front.form.entry',['personal']) }}">
                                व्यक्तिगत
                            </a>
                            <a href="{{ route('front.form.entry',['company']) }}">
                                संस्थागत
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection

@push('script')
@endpush