@extends('frontEnd.layout.master')

@push('style')
@endpush

@section('content')

    <form method="post" action="{{ route('front.form.kyc.store') }}" class="open-form" enctype="multipart/form-data">
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
                    सदस्य पहिचान विवरण
                </div>

            </div>

        </div>
        <div class="form-content container">
            <div class="main-title">
                व्यक्तिगत विवरण
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">नाम, थरः  </label>
                    <input type="text" name="full_name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">जन्म मिति </label>
                    <input type="text" name="DOB" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">लिङ्ग </label>
                    <select name="gender" id="" class="form-control">
                        <option value="महिला / Female">महिला / Female</option>
                        <option value="पुरुष / Male">पुरुष / Male</option>
                        <option value="अन्य / Other">अन्य / Other</option>
                    </select>
                </div>

            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">नागरिकता नं.</label>
                    <input type="text" name="citizenship_no" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">नागरिकता जारी जिल्ला</label>
                    <input type="text" name="citizenship_issue_district" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">जारी मितिः </label>
                    <input type="text" name="citizenship_issue_date" class="form-control" />
                </div>
            </div>


            <div class="main-title">
                पारिवारिक विवरण
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">बाबुको नाम</label>
                    <input type="text" name="father_name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">आमाको नाम </label>
                    <input type="text" name="mother_name" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="">बाजेको नाम </label>
                    <input type="text" name="grandfather_name" class="form-control" />
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">बैवाहिक स्थिति</label>
                    <select name="marital_status" id="">
                        <option value="">विवाहित </option>
                        <option value="">अविवाहित</option>
                        <option value="">एकल</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">पति व पत्नीको नाम, थर</label>
                    <input type="text" name="spouse_name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">परिवारको किसिम</label>
                    <select name="family_type" class="form-control" >
                        <option value="">संयुक्त र एकै भान्छा </option>
                        <option value="">संयुक्त तर अलग भान्छा</option>
                        <option value=""> छुिट्टभिन्न वाएकसरुवा (न्युक्लियर)</option>
                    </select>
                </div>


            </div>
            <div class="main-title">
                पेसाको विवरण
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">आफ्नो मुख्यपेशा</label>
                    <input type="text" name="occupation" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">स्थायी लेखानम्बर</label>
                    <input type="text" name="pan_number" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">पतिवापत्नीको मुख्य पेसा</label>
                    <input type="text" name="spouse_occupation"  class="form-control" />
                </div>
            </div>
            <div class="form-flex">

                <div class="form-group">
                    <label for="">आफू, पतिवापत्नीबाहेक परिवारमा अर्को मुख्यकमाउने सदस्यनाता</label>
                    <input type="text" name="family_main_member" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">पेशा</label>
                    <input type="text" name="family_main_member_occupation" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">आफै वा परिवारको कुनै सदस्यउच्चपदीय राजनीतिक, प्रशासनिकवा सांगठनिक भूमिकामा रहे, नरहेको   </label>
                    <div class="checkbox-wrap">
                        <input type="radio" name="is_family_member_higher_position"  />

                        <label for="">रहेको </label>
                    </div>
                    <div class="checkbox-wrap">

                        <input type="radio" name="is_family_member_higher_position"  />

                        <label for="">नरहेको
                        </label>
                    </div>
                </div>

            </div>
            <label for=""><strong>आफै वा परिवारको कुनै सदस्य उच्चपदीय राजनीतिक, प्रशासनिकवा सांगठनिक भूमिकामा भए विवरण</strong> </label>

            <div class="form-flex">
                <div class="form-group">
                    <label for="">नाम</label>
                    <input type="text"  name="family_member_higher_position_name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">नाता </label>
                    <input type="text"  name="family_member_higher_position_relation" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">पद वा सार्वजनिकभूमिका</label>
                    <input type="text"  name="family_member_higher_position" class="form-control" />
                </div>
            </div>
            <div class="main-title">
                स्थायी ठेगान
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">जिल्ला </label>
                    <input type="text" name="permanent_district" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">न.पा. / गा.वि.स. </label>
                    <input type="text" name="permanent_vdc_munc" class="form-control" />
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">वार्ड नं. </label>
                    <input type="text" name="permanent_ward_no" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">टोल  </label>
                    <input type="text" name="permanent_tole" class="form-control" />
                </div>
            </div>

            <div class="main-title">
                हालको ठेगान
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">जिल्ला </label>
                    <input type="text" name="temporary_district" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">न.पा. / गा.वि.स. </label>
                    <input type="text" name="temporary_vdc_munc" class="form-control" />
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">वार्ड नं. </label>
                    <input type="text" name="temporary_ward_no" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">टोल  </label>
                    <input type="text" name="temporary_tole" class="form-control" />
                </div>
            </div>
            <hr>
            <div class="form-flex">
                <label for="">संस्थाको कार्यक्षेत्रको बसोबास</label>
                <div class="checkbox-wrap">
                    <input type="checkbox" name="residence_of_organization"  />

                    <label for="">अस्थायी</label>
                </div>
                <div class="checkbox-wrap">

                    <input type="checkbox"  name="residence_of_organization"  />

                    <label for=""> स्थायी</label>
                </div>


            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">मतदाता परिचयपत्र नं.</label>
                    <input type="text" name="voter_id_no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">मतदानस्थल</label>
                    <input type="text" name="voter_address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">संस्थाको कार्यक्षेत्रमावर्षमा विताउने अवधि</label>
                    <input type="text" name="period_of_time_in_organization" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">राहदानी नं. भएमा</label>
                    <input type="text" name="passport_no" class="form-control">
                </div>
            </div>
            <div class="main-title">
                सहकारी सदस्यताः
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">संस्थाको सदस्यबन्नुको उदेश्य</label>
                    <input type="text" name="organization_join_purpose" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">आफु अर्को सहकारी संस्थाको पनि सदस्यभए, नभएको             </label>
                    <div class="checkbox-wrap">
                        <input type="radio" name="invlove_in_other_organization"  />

                        <label for="">भएको </label>
                    </div>
                    <div class="checkbox-wrap">

                        <input type="radio" name="invlove_in_other_organization"  />

                        <label for="">नभएको</label>
                    </div>
                </div>
            </div>
            <label for=""><strong>आफु अर्को सहकारी संस्थाको पनि सदस्यभएको भएविवरण</strong> </label>


            <div class="form-flex">
                <div class="form-group">
                    <label for="">संस्थाको नाम  </label>
                    <input type="text" name="involve_in_other_organization_name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">ठेगाना         </label>
                    <input type="text" name="involve_in_other_organization_address" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">सदस्यता नं.</label>
                    <input type="text" name="involve_in_other_organization_no" class="form-control" />
                </div>
            </div>
            <div class="form-group">

                <label for="">आफूबाहेक परिवारको सदस्यअर्को सहकारी संस्थाको सदस्यभए, नभएको</label>
                <div class="checkbox-wrap">
                    <input type="radio" name="family_involve_in_other_organization_no"  />

                    <label for="">भएको   </label>
                </div>
                <div class="checkbox-wrap">

                    <input type="radio" name="family_involve_in_other_organization_no"  />

                    <label for="">नभएको</label>
                </div>
            </div>
            <label for=""><strong>आफूबाहेक परिवारको सदस्यअर्को सहकारी संस्थाको सदस्यभएको भए,विवरण</strong> </label>


            <div class="form-flex">
                <div class="form-group">
                    <label for="">संस्थाको नाम  </label>
                    <input type="text" name="family_involve_in_other_organization_name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">ठेगाना         </label>
                    <input type="text" name="family_involve_in_other_organization_address" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">सदस्यता नं.</label>
                    <input type="text" name="family_involve_in_other_organization_no" class="form-control" />
                </div>
            </div>

            <hr>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">आफै अन्य सहकारी संस्थाको पनि सदस्यभएको भए दोहोरो वा बहुसंस्थामा सदस्यताको प्रयोजन</label>
                    <input type="text" name="purpose_of_membership_in_dual" class="form-control">
                </div>
                <div class="form-group">
                    <label for=""> आफूबाहेक परिवारको सदस्यअन्यसहकारी संस्थाको सदस्यभएको भए दोहोरो वा बहुसंस्थामा सदस्यताको प्रयोजन</label>
                    <input type="text" name="family_purpose_of_membership_in_dual" class="form-control">
                </div>
            </div>

            <div class="form-group">

                <label for="">परिवारको अर्को सदस्यपनि यस संस्थाको भए, नभएको</label>
                <div class="checkbox-wrap">
                    <input type="radio" name="family_in_this_organization" />

                    <label for=""> भएको</label>
                </div>
                <div class="checkbox-wrap">

                    <input type="radio" name="family_in_this_organization"  />

                    <label for="">नभएको</label>
                </div>
            </div>
            <label for=""><strong>परिवारको अर्को सदस्यपनि यस संस्थाको सदस्य, भएको भएविवरण</strong> </label>


            <div class="form-flex">
                <div class="form-group">
                    <label for="">नाम, थर </label>
                    <input type="text" name="family_in_this_organization_name" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="">सदस्यता नं.</label>
                    <input type="text" name="family_in_this_organization_no" class="form-control" />
                </div>
            </div>

            <div class="main-title">
                आयस्रोतको विवरण
            </div>


            <label for=""> <strong>
                    वार्षिक पारिवारिक (आफ्नो, पतिवापत्नीको र एउटै भातभान्छाका सदस्यहरुको) आम्दानी (जग्गाको खुदआयस्ता, नोकरीको पारिश्रमिक, व्यवसायको मुनाफा, इत्यादि)
                </strong></label>
            <div class="form-flex">

                <div class="checkbox-wrap">
                    <input name="family_income" type="radio"  />

                    <label for="">४ लाखसम्म</label>
                </div>
                <div class="checkbox-wrap">

                    <input name="family_income" type="radio"  />

                    <label for="">४ लाखभन्दा बढी रु. १० लाखसम्म</label>
                </div>
                <div class="checkbox-wrap">

                    <input name="family_income" type="radio"  />

                    <label for="">१० लाखभन्दा बढी रु. २५ लाखसम्म</label>
                </div>
                <div class="checkbox-wrap">

                    <input name="family_income" type="radio"  />

                    <label for="">२५ लाखभन्दा बढी रु. ५० लाखसम्म</label>
                </div>
                <div class="checkbox-wrap">

                    <input name="family_income" type="radio"  />

                    <label for="">५० लाख बढी</label>
                </div>



            </div>
            <label for=""><strong>रु. ४ लाखभन्दा बढी बार्षिक पारिवारिक आम्दानीभए पछिल्लो आर्थिक वर्षको आय र स्रोतको विवरण</strong></label>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">खेतीपाति</label>
                    <input type="number" name="family_income_agri" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">व्यवसाय</label>
                    <input type="number" name="family_income_business" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">स्वदेशी रोजगारी</label>
                    <input type="number" name="family_income_nepal" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">वैदेशिक रोजगारी</label>
                    <input type="number" name="family_income_abroad" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div style="width: 350px;"> अन्य</div>
                <label for="">खुलाउने </label>
                <input type="text" class="form-control" name="family_income_others" placeholder="">

            </div>
            <div class="main-title">
                वित्तीय कारोबारको विवरण

            </div>
            <label for=""><strong>संस्थामाहालसम्मजम्म गरेको रकमको विवरण</strong></label>

            <div class="form-flex">
                <div class="form-group">
                    <label for="">शेयर</label>
                    <input name="organization_share" type="number" class="form-control" placeholder="Amount">
                </div>
                <div class="form-group">
                    <label for="">बचत</label>
                    <input type="number" name="organization_saving" class="form-control" placeholder="Amount">
                </div>
                <div class="form-group">
                    <label for="">अन्य </label>
                    <input type="number" name="organization_saving_other" class="form-control" placeholder="Amount">
                </div>
            </div>
            <label for=""><strong>संस्थाको खातामाअनुमानित राखनधरनको रकम ः</strong> </label>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">वर्षमा कारोबार गर्ने पटक</label>
                    <input type="number" name="yearly_trans_time" class="form-control" placeholder="Amount">
                </div>
                <div class="form-group">
                    <label for="">वार्षिक रुपमाजम्मा गर्ने अनुमानित रकम रु</label>
                    <input type="number" name="yearly_trans_amount" class="form-control" placeholder="Amount">
                </div>

            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">संस्थासँगअनुमानितऋणधनको रकम रु</label>
                    <input type="number" name="loan_amount" class="form-control" placeholder="Amount">
                </div>
                <div class="form-group">
                    <label for="">अभिलेखमा राख्नयोग्यथपविवरण वा द्रष्टव्य</label>
                    <input type="text" name="details_record" class="form-control" placeholder="Amount">
                </div>

            </div>
            <div class="main-title">
                संलन्नकागजातहरु
            </div>
            <div class="row">
                <div class="col-md-3 offset-1">
                    <div class="photo-upload">
                        <div class="photo-wrapper">
                            <img id="upload_with_preview" class="img-fluid" />
                            <div class="photo-text">
                                नेपालीनागरिकताको प्रमाण <br> पत्रको प्रतिलिपि
                            </div>
                        </div>
                        <input type="file" name="citizenship_photo" id="upload-button" />
                    </div>
                </div>
                <div class="col-md-3">

                    <div class="photo-upload">
                        <div class="photo-wrapper">
                            <img id="upload_with_preview" class="img-fluid" />
                            <div class="photo-text">
                                मतदाता परिचयपत्रको <br>प्रतिलिपि
                            </div>
                        </div>
                        <input type="file" name="voter_id_photo" id="upload-button" />
                    </div>
                </div>
                <div class="col-md-3">

                    <div class="photo-upload">
                        <div class="photo-wrapper">
                            <img id="upload_with_preview" class="img-fluid" />
                            <div class="photo-text">
                                अन्य
                            </div>
                        </div>
                        <input type="file" name="other_photo" id="upload-button" />
                    </div>
                </div>
            </div>

            <div class="main-title">
                स्व–घोषणा
            </div>
            <ul >
                <li>मैले पेस गरेको यो विवरणमा भविष्यमाकुनै परिवर्तन आएमात्यस्तो परिवर्तन भएको मितिले ३५ दिनभित्र संस्थामा पेस गर्नेछु ।</li>
                <li> मैले माथि पेस गरेको मेरो सम्पूर्ण विवरण ठीक, दुरुस्त छ । झुट्टा ठहरे कानुनबमोजिम सहुँला, बुझाउँला । </li>
            </ul>
            <div class="row">
                <div class="col-md-3 offset-1">
                    <div class="photo-upload">
                        <div class="photo-wrapper">
                            <img id="upload_with_preview" class="img-fluid" />
                            <div class="photo-text">
                                दस्तखत
                            </div>
                        </div>
                        <input type="file" name="signature_photo" id="upload-button" />
                    </div>
                </div>
                <div class="col-md-3">

                    <div class="photo-upload">
                        <div class="photo-wrapper">
                            <img id="upload_with_preview" class="img-fluid" />
                            <div class="photo-text">
                                दायाँ औँठाछाप
                            </div>
                        </div>
                        <input type="file" name="right_fingerprint" id="upload-button" />
                    </div>
                </div>
                <div class="col-md-3">

                    <div class="photo-upload">
                        <div class="photo-wrapper">
                            <img id="upload_with_preview" class="img-fluid" />
                            <div class="photo-text">
                                बायाँ औँठाछाप
                            </div>
                        </div>
                        <input type="file" name="left_fingerprint" id="upload-button" />
                    </div>
                </div>
            </div>
        </div>




        <div class="register-button">
            <button class="btn btn-success">
                Register Now
            </button>
        </div>
    </form>


@endsection

@push('script')

<script>

    // function readURL(input) {
    // 		if (input.files && input.files[0]) {
    // 			var reader = new FileReader();
    //             console.log(input.closest("img"));

    // 			reader.onload = function (e) {
    //                 let closedata = $(input).closest(".photo-wrapper");
    //                 console.log(closedata)
    // 				$(input).closest(".photo-wrapper").find("img")
    // 					.attr("src", e.target.result);
    // 				$(".photo-wrapper .photo-text").hide();
    // 			};

    // 			reader.readAsDataURL(input.files[0]); // convert to base64 string
    // 		}
    // 	}

    // $("#upload-button").change(function () {
    // 	readURL(this);
    // });

    function readMoreURL(input) {

        if (input.files && input.files[0]) {
            console.log('hi')
            var reader = new FileReader();

            reader.onload = function (e) {
                $(input)
                    .closest(".photo-upload ")
                    .find("img")
                    .attr("src", e.target.result);
            };
            $(input).closest(".photo-upload").find(".photo-text").hide();

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $(".photo-upload  input").change(function () {
        readMoreURL(this);
    });


</script>

@endpush