@extends('frontEnd.layout.master')

@push('style')
@endpush

@section('content')

    <form method="post" action="{{ route('front.form.share.store') }}" enctype="multipart/form-data" class="open-form">
        <input type="hidden" name="form_id" value="{{$form->id}}">
        @csrf
        <div class="form-header container">
            <div class="logo-container">
                <img src="{{ asset('front/assets/images/logo-footer.png') }}" class="img-fluid" alt="" />
            </div>
            <div class="header-items">

                <div class="university">
                    हब को-ओपेरटिव सर्विस ली.
                </div>
                <div class="faculty">
                    भक्तिमार्ग, बालुवाटार, काठमाडौं, नेपाल
                </div>
                <div class="application">
                    शेयर दरखास्त फारम
                </div>

            </div>
            <div class="photo-upload">
                <div class="photo-wrapper">
                    <img id="upload_with_preview_photo" class="img-fluid" />
                    <div class="photo-text">
                        Upload PP Size Photo
                    </div>
                </div>
                <input name="image_passport" type="file" id="upload-button-photo" />
            </div>
        </div>
        <div class="form-content container">
            <div class="salutation">
                <h5>श्री सञ्चालक समिति</h5>
                <h5>हब को–अपरेटिभ सर्भिस लि.</h5>
                <h5>बलुवाटार, काठमाण्डौँ</h5>

            </div>
            <h5 class="mt-5">
                महोदय,
            </h5>
            <p class="share-form-detail">
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; यस हब को–अपरेटिभ सर्भिस लि.को आह्वानअनुरुप संस्थाको शेयर सदस्यहुनको निमित संस्थाको विनियममा उल्लेखित शर्तहरुको अधिनमा रही सदस्यताशुल्क रु.

                <input type="number" name="amount">

                तिरी प्रति शेयर कित्ता रु. १००÷– (एक सय रुपैयाँ) दरका <input type="number" name="share_quantity"> कित्ता शेयर लिन मेरो÷हाम्रो इच्छ भएकोले उक्त शेयर संस्था बराबरको जम्मा रकम रु. <input name="final_amount" type="number"> बुझाउनमञ्जुर छु/छौ । शेयर वापतको रकम यस संस्थाले आह्वान गरेको समयमातिर्न/बुझाउननसके संस्थाको नियमबमोजिम सहुँलाबुझाउँला । अतः उल्लेखित विवरण अनुसारको मेरो÷हाम्रो नाममा शेयर पाउने व्यवस्था गरिदिनु हुन अनुरोध गर्दछु/गर्दछौँ ।

            </p>
            <p>
                भवदीय<br>
                शेयर लिनकबुल गर्ने संस्था वा व्याक्तिको
            </p>
            <div class="main-title">
                संस्था वा व्याक्तिको विवरण
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">नाम, थरः</label>
                    <input name="full_name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">मोबाइल नं</label>
                    <input name="mobile" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">फोन नं.</label>
                    <input name="phone" type="text" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">स्थायी ठेगान</label>
                    <input name="temporary_address" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">हालको ठेगान</label>
                    <input name="current_address" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">पेशा/व्यवसाय</label>
                    <input name="occupation" type="text" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">संस्थाको नाम</label>
                    <input name="organization_name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">संस्थाको ठेगानाः</label>
                    <input name="organization_address" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">नागरिकता नं.</label>
                    <input name="citizenship_no" type="text" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">जारी मितिः</label>
                    <input name="dob" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">जारी जिल्ला </label>
                    <input name="issue_district" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">पति/पत्नीको नाम, थरः</label>
                    <input name="husband_wife_name" type="text" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">पति/पत्नीको पेशा/व्यवसाय</label>
                    <input name="husband_wife_occupation" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">पिताको नाम, थर</label>
                    <input name="father_name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">बाजे/ससुराको नाम, थरः</label>
                    <input name="grandfather_name" type="text" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">हकवालको नाम, थरः</label>
                    <input name="trusted_name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">हकवालको  ठेगानाः </label>
                    <input name="trusted_address" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">हकवालासँगको नातासम्बन्धः</label>
                    <input name="trusted_relation" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">हकवालासँगको फोन नं.</label>
                    <input name="trusted_phone" type="text" class="form-control">
                </div>

            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="photo-upload">
                        <div class="photo-wrapper">
                            <img id="upload_with_preview" class="img-fluid" />
                            <div class="photo-text">
                                निवेदकको दस्तखत
                            </div>
                        </div>
                        <input name="applicant_signature" type="file" id="upload-button" />
                    </div>
                </div>
            </div>
            <div class="register-button">
                <button class="btn btn-success">
                    Apply Now
                </button>
            </div>
        </div>
    </form>

@endsection

@push('script')

<script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $("#upload_with_preview").attr("src", e.target.result);
                $(".photo-wrapper .photo-text").hide();
            };

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    };

    $("#upload-button").change(function () {
        readURL(this);
    });

    function readURLPhoto(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $("#upload_with_preview_photo").attr("src", e.target.result);
                $(".photo-wrapper .photo-text").hide();
            };

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    };
    $("#upload-button-photo").change(function () {
        readURLPhoto(this);
    });

    function readMoreURL(input) {
        console.log(input.closest("img"));
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(input)
                    .closest(".form-flex1")
                    .find("img")
                    .attr("src", e.target.result);
            };

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $(".form-flex1 input").change(function () {
        readMoreURL(this);
    });


</script>

@endpush