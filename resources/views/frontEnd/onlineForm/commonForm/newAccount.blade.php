<div class="border border-dark mb-3">
<form method="post" action="{{ route('front.form.new-account.store') }}" enctype="multipart/form-data" class="open-form">
    <input type="hidden" name="form_id" value="{{$form->id}}">
    <input type="hidden" name="form_user_id" value="{{$formUser->id}}">
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
                नयाँ खाता खुलाउने फारम
            </div>

        </div>
        <div class="photo-upload">
            <div class="photo-wrapper">
                <img id="upload_with_preview" class="img-fluid" />
                <div class="photo-text">
                    Upload PP Size Photo
                </div>
            </div>
            <input name="image_passport" required type="file" id="upload-button" />
        </div>
    </div>
    <div class="form-content container">
        <div class="main-title">
            व्याक्तिको विवरण / Personal Details
        </div>
        <div class="form-flex">
            <div class="form-group">
                <label for="">नाम, थरः / Full Name </label>
                <input name="full_name" required type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">जन्म मिति / Date of Birth</label>
                <input name="dob" required type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">लिङ्ग / Gender</label>
                <select name="gender" required id="" class="form-control">
                    <option value="female">महिला / Female</option>
                    <option value="male">पुरुष / Male</option>
                    <option value="other">अन्य / Other</option>
                </select>
            </div>
        </div>

        <div class="form-flex">

            <div class="form-group">
                <label for="">कार्यालय नं. / Office No. </label>
                <input name="office_phone" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">मोबाइल नं./ Mobile No. </label>
                <input name="mobile_phone" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">निवास नं. / Residence No. </label>
                <input name="residence_phone" type="text" class="form-control" />
            </div>

        </div>
        <div class="form-flex">
            <div class="form-group">
                <label for="">फ्याक्स नं. / Fax No. </label>
                <input name="fax" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">ईमेल / Email </label>
                <input name="email" type="email" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">बैवाहिक विवरण / Marital Status</label>
                <select name="marital_status" id="" class="form-control">
                    <option value="married">विवाहित  / Married                              </option>
                    <option value="unmarried">अविवाहित / Unmarried</option>
                </select>
            </div>
        </div>
        <div class="form-flex">
            <div class="form-group">
                <label for="">कगज पत्र / Document</label>
                <select name="document_type" required id="identity_type" class="form-control">
                    <option value="citizenship">नागरिकता / Citizenship</option>
                    <option value="passport">राहदानी / Passport</option>
                    <option value="other">अन्य / Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">परिचयपत्र नं. / Identity No.</label>
                <input name="document_no" required type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">जारी जिल्ला / Issue District</label>
                <input name="document_district" type="text" class="form-control" />
            </div>

        </div>
        <div class="form-flex">

            <div class="form-group">
                <label for="">जारी मितिः / Issue Date</label>
                <input name="document_issue_date" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">पेशा / Occupation </label>
                <input name="occupation" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">राष्ट्रियता / Nationality</label>
                <input name="nationality" type="text" class="form-control" />
            </div>

        </div>
        <div class="form-flex">
            <div class="form-group">
                <label for="">पिता (Father) / पतिको (Husband) नाम Name </label>
                <input name="husband-or-father-name" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for=""> बाजे (GrandFather) / ससुराको (FatherinLaw) नाम Name </label>
                <input name="grandfather-name" type="text" class="form-control" />
            </div>
        </div>
        <div class="form-flex">
            <div class="form-group">
                <label for="">आमा (Mother) / श्रीमतीको (Wife) नाम Name</label>
                <input name="mother-or-wife-name" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">शुरुको बतच रकम / Initial Saving Amount</label>
                <input name="initial-saving" type="number" class="form-control" />
            </div>

        </div>
        <div class="main-title">
            खाताको  किसिम (Account Nature)
        </div>
        <div class="form-flex">

            <div class="checkbox-wrap">
                <input type="radio"  name="account-nature" value="personal"/>

                <label for="">नीजि खाता / Personal Account</label>
            </div>
            <div class="checkbox-wrap">

                <input type="radio" name="account-nature" value="joint" />

                <label for="">संयुक्त खाता / Joint Account</label>
            </div>
            <div class="checkbox-wrap">

                <input type="radio" name="account-nature" value="minor" />

                <label for="">नबलक / Minor</label>
            </div>

            <div class="checkbox-wrap">

                <input type="radio" name="account-nature" value="other"/>

                <label for="">अन्य / Other</label>
                <input name="account_nature_other_text" type="text" class="form-control">
            </div>

        </div>
        <div class="main-title">
            खाताको प्रकार / Type of Account
        </div>
        <div class="form-flex">

            <div class="checkbox-wrap">
                <input type="radio"  name="account-type" value="normal_saving"/>

                <label for="">साधारण बचत / Normal Saving </label>
            </div>
            <div class="checkbox-wrap">

                <input type="radio" name="account-type" value="naari_saving" />

                <label for="">नारी बचत / Nari Bachat</label>
            </div>
            <div class="checkbox-wrap">

                <input type="radio"  name="account-type" value="loan_saving"/>

                <label for="">ऋावधित बचत </label>
            </div>



        </div>
        <div class="form-flex">
            <div class="checkbox-wrap">

                <input type="radio" name="account-type" value="hub_special_saving"/>

                <label for="">ह्बविशेष बचत / Hub Special Saving </label>
            </div>
            <div class="checkbox-wrap">
                <input type="radio"  name="account-type" value="baal_sikshya_saving"/>

                <label for="">बलशिक्षा बचत / Bal Sikshya Bachat</label>
            </div>
            <div class="checkbox-wrap">

                <input type="radio"  name="account-type" value="senior_citizen_saving"/>

                <label for="">जेष्ठ नागरिक बचत / Senior Citizen Saving</label>
            </div>


        </div>
        <div class="form-flex">
            <div class="checkbox-wrap">

                <input type="radio" name="account-type" value="loan_period_saving"/>

                <label for="">ऋवधि  </label>
                <input type="text" name="loan_period_saving_text" placeholder="In Month" class="form-control">
            </div>
            <div class="checkbox-wrap">

                <input type="radio" name="account-type" value="other"/>

                <label for="">अन्य / Other</label>
                <input type="text" name="other_account_type_text" class="form-control">
            </div>



        </div>

        <div class="main-title">
            स्थायी ठेगान / Permanent Address
        </div>
        <div class="form-flex">
            <div class="form-group">
                <label for="">प्रदेश / Province</label>
                <select name="permanent_province" onchange="pradeshChange(this)" required data-target="permanent_district" data-child="permanent_municipal" class="form-control">
                    <option value="">Select Province</option>
                    @foreach($Provinces as $province)
                        <option data-id="{{$province->id}}" value="{{$province->title_np}}">{{$province->title_np}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">जिल्ला / District</label>
                <select name="permanent_district" required class="form-control" onchange="districtChange(this)" data-target="permanent_municipal" id="permanent_district">
                    <option value="">Select District</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">न.पा. / गा.वि.स. / VDC / Municipality</label>
                <select name="permanent_municipal" required class="form-control" id="permanent_municipal">\
                    <option value="">Select Municipal</option>
                </select>
            </div>
        </div>
        <div class="form-flex">
            <div class="form-group">
                <label for="">वार्ड नं. / Ward No.</label>
                <input name="permanent_ward" type="number" required class="form-control" />
            </div>
            <div class="form-group">
                <label for="">टोल / Tole </label>
                <input name="permanent_tole" type="text" required class="form-control" />
            </div>
        </div>

        <div class="main-title">
            हालको ठेगान / Temporary Address
        </div>
        <div class="form-flex">
            <div class="form-group">
                <label for="">प्रदेश / Province</label>
                <select name="temporary_province" onchange="pradeshChange(this)" data-target="temporary_district" data-child="temporary_municipal" class="form-control">
                    <option value="">Select Province</option>
                    @foreach($Provinces as $province)
                        <option data-id="{{$province->id}}" value="{{$province->title_np}}">{{$province->title_np}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">जिल्ला / District</label>
                <select name="temporary_district"  class="form-control" onchange="districtChange(this)" data-target="temporary_municipal" id="temporary_district">
                    <option value="">Select District</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">न.पा. / गा.वि.स. / VDC / Municipality</label>
                <select name=temporary_municipal"  class="form-control" id="temporary_municipal">\
                    <option value="">Select Municipal</option>
                </select>
            </div>
        </div>
        <div class="form-flex">
            <div class="form-group">
                <label for="">वार्ड नं. / Ward No.</label>
                <input name="temporary_ward" type="number" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">टोल / Tole </label>
                <input name="temporary_tole" type="text" class="form-control" />
            </div>
        </div>
        <div class="main-title">
            विवरण  / Statement
        </div>
        <div class="form-flex">

            <div class="checkbox-wrap">
                <input type="radio" name="statement" value="personally" />

                <label for="">आफै लिनआउने / Personally Collect</label>
            </div>
            <div class="checkbox-wrap">

                <input type="radio"  name="statement" value="post_box" />

                <label for="">हुलाकमार्फत / By Post Box</label>
            </div>
            <div class="checkbox-wrap">

                <input type="radio"  name="statement" value="english_calendar" />

                <label for="">अंगे्रजीपात्रो अनुसार / In English Calendar</label>
            </div>
            <div class="checkbox-wrap">

                <input type="radio" name="statement" value="nepali_calendar" />

                <label for="">नेपालीपात्रो अनुसार / In Nepali Calendar</label>
            </div>



        </div>

        <div class="main-title">
            परिचय गराउनेको  विवरण <br> Introducer's Detail
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="form-flex">
                    <div class="form-group">
                        <label for="">परिचय गराउनेको नाम  / Introducer Name</label>
                        <input name="introducer_name" type="text" class="form-control" />
                    </div>

                </div>
                <div class="form-flex">
                    <div class="form-group">
                        <label for="">प्द / Designation</label>
                        <input name="introducer_job" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">ठेगाना / Address</label>
                        <input name="introducer_address" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">मोबाइल / Mobile No.</label>
                        <input name="introducer_mobile" type="text" class="form-control" />
                    </div>

                </div>
            </div>
            <div class="col-md-2">
                <div class="photo-upload">
                    <div class="photo-wrapper">
                        <img id="upload_with_preview" class="img-fluid" />
                        <div class="photo-text">
                            परिचय गराउनेको दस्तखत / Introducer's Signature
                        </div>
                    </div>
                    <input name="introducer_signature" type="file" id="upload-button" />
                </div>
            </div>
        </div>
        <div class="main-title">
            दस्तखत नमूना / Specimen Signature
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">नाम, थार / Full Name</label>
                    <input name="specimen_signature_name_1" type="text" class="form-control" />
                </div>
                <div class="photo-upload">
                    <div class="photo-wrapper">
                        <img id="upload_with_preview" class="img-fluid" />
                        <div class="photo-text">
                            दस्तखत नमूना <br> Speciman Signature
                        </div>
                    </div>
                    <input name="specimen_signature_image_1" type="file" id="upload-button" />
                </div>

            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">नाम, थार / Full Name</label>
                    <input name="specimen_signature_name_2" type="text" class="form-control" />
                </div>
                <div class="photo-upload">
                    <div class="photo-wrapper">
                        <img id="upload_with_preview" class="img-fluid" />
                        <div class="photo-text">
                            दस्तखत नमूना <br> Specimen Signature
                        </div>
                    </div>
                    <input name="specimen_signature_image_2" type="file" id="upload-button" />
                </div>

            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">नाम, थार / Full Name</label>
                    <input name="specimen_signature_name_3" type="text" class="form-control" />
                </div>
                <div class="photo-upload">
                    <div class="photo-wrapper">
                        <img id="upload_with_preview" class="img-fluid" />
                        <div class="photo-text">
                            दस्तखत नमूना <br> Specimen Signature
                        </div>
                    </div>
                    <input name="specimen_signature_image_3" type="file" id="upload-button" />
                </div>

            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">नाम, थार / Full Name</label>
                    <input name="specimen_signature_name_4" type="text" class="form-control" />
                </div>
                <div class="photo-upload">
                    <div class="photo-wrapper">
                        <img id="upload_with_preview" class="img-fluid" />
                        <div class="photo-text">
                            दस्तखत नमूना <br> Specimen Signature
                        </div>
                    </div>
                    <input name="specimen_signature_image_4" type="file" id="upload-button" />
                </div>

            </div>
        </div>

        <div class="main-title">
            खाता सञ्चालनको निर्देशन <br> Account Operation Instruction
        </div>
        <div class="form-flex">
            <div class="checkbox-wrap">
                <input type="radio" name="account_instruction" value="single" />

                <label for="">एकल / Single </label>
            </div>
            <div class="checkbox-wrap">

                <input type="radio"  name="account_instruction" value="joint" />

                <label for="">संयुक्त / Joint</label>
            </div>
            <div class="checkbox-wrap">

                <input type="radio"  name="account_instruction" value="any_one" />

                <label for="">कुनै एक / Any one</label>
            </div>
            <div class="checkbox-wrap">

                <input type="radio"  name="account_instruction" value="any_two"  />

                <label for="">कुनै दुई / Any Two</label>
            </div>
            <div class="checkbox-wrap">

                <input type="radio"  name="account_instruction" value="any_three" />

                <label for="">कुनै तीन / Any Three</label>
            </div>

        </div>
        <div class="form-flex">
            <div class="form-group">
                <label for="">विशेष निर्देशन / Special Instruction</label>
                <textarea name="account_instruction_text" id="" cols="30" rows="5"></textarea>
            </div>
        </div>
        <div class="main-title">
            इच्छाइएको व्यक्तिको विवरण <br> Nominee's Detail
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="form-flex">
                    <div class="form-group">
                        <label for="">नम, थर</label>
                        <input name="nominee_name" type="text" class="form-control" />
                    </div>

                </div>
                <div class="form-flex">
                    <div class="form-group">
                        <label for="">नता सम्बन्ध / Relationship</label>
                        <input name="nominee_name" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">जन्म मिति / Date of Birth</label>
                        <input name="nominee_dob" type="text" class="form-control" />
                    </div>
                </div>
                <div class="form-flex">

                    <div class="form-group">
                        <label for="">पिता / पति / Father/ Husband Name</label>
                        <input name="nominee_father_husband_name" type="text" class="form-control" />
                    </div>


                </div>
                <div class="form-flex">


                    <div class="form-group">
                        <label for="">ससुरा / बाजे / Father in Law / GrandFather's Name</label>
                        <input name="nominee_grandfather_name" type="text" class="form-control" />
                    </div>

                </div>
                <div class="form-flex">
                    <div class="form-group">
                        <label for="">ठेगाना / Address</label>
                        <input name="nominee_address" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">फोन नं. / Telephone No.</label>
                        <input name="nominee_telephone" type="text" class="form-control" />
                    </div>
                </div>


            </div>
            <div class="col-md-2">

                <div class="photo-upload" style="padding-top: 30px;">
                    <div class="photo-wrapper">
                        <img id="upload_with_preview" class="img-fluid" />
                        <div class="photo-text">
                            इच्छाइएको व्यक्तिको फोटो <br>  Nominee Photo
                        </div>
                    </div>
                    <input name="nominee_image" type="file" id="upload-button" />
                </div>

                <div class="photo-upload" style="padding-top: 30px;">
                    <div class="photo-upload " style="padding-top: 30px;">
                        <div class="photo-wrapper">
                            <img id="upload_with_preview" class="img-fluid" />
                            <div class="photo-text">
                                इच्छाइएको व्यक्तिको दस्तखत <br> Nominee Signature
                            </div>
                        </div>
                        <input name="nominee_signature" type="file" id="upload-button" />
                    </div>
                </div>

            </div>
        </div>
        <div class="main-title">
            नाबालक हकमा /  In Case of Minor
        </div>
        <div class="form-flex">
            <div class="form-group">
                <label for="">जन्म मिति / Date of Birth</label>
                <input name="minor_dob" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">नाबालकसँगको नाता / Relation with Minor</label>
                <input name="minor_relation" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">अभिभावकको नाम / Guardian Name</label>
                <input name="minor_guardian" type="text" class="form-control">
            </div>
        </div>
        <div class="register-button">
            <button type="submit" class="btn btn-success">
                Submit
            </button>
        </div>
    </div>
</form>
</div>
<script>

    function readMoreURL(input) {

        if (input.files && input.files[0]) {
            console.log('here');
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
