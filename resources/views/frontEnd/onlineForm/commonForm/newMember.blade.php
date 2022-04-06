<div class="border border-dark mb-3">
    <form method="post" action="{{ route('front.form.member.store') }}" class="open-form" enctype="multipart/form-data">
        <input type="hidden" name="form_id" value="{{ $form->id }}">
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
                    सदस्यता आवेदन फाराम
                </div>

            </div>
            <div class="photo-upload">
                <div class="photo-wrapper">
                    <img id="upload_with_preview_photo" class="img-fluid" />
                    <div class="photo-text">
                        संघ/संस्थाको छाप
                    </div>
                </div>
                <input name="company_stamp" required type="file" id="upload-button-photo" />
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
                यस हब को–अपरेटिभ सर्भिस लि.को आह्वानअनुरुप संस्थाको शेयर सदस्यहुनको निमित संस्थाको विनियममा उल्लेखित शर्तहरुको अधिनमा रही सदस्यताशुल्क रु.



                तिरी प्रति शेयर कित्ता रु. १००/– <input type="hidden" name="share_rate" value="100"> (एक सय रुपैयाँ) दरका <input name="share_quantity" type="number"> कित्ता शेयर लिन मेरो/हाम्रो इच्छ भएकोले उक्त शेयर संस्था बराबरको जम्मा रकम रु. <input name="share_amount" type="number" readonly> बुझाउनमञ्जुर छु/छौ । शेयर वापतको रकम यस संस्थाले आह्वान गरेको समयमातिर्न/बुझाउननसके संस्थाको नियमबमोजिम सहुँलाबुझाउँला । अतः उल्लेखित विवरण अनुसारको मेरो÷हाम्रो नाममा शेयर पाउने व्यवस्था गरिदिनु हुन अनुरोध गर्दछु/गर्दछौँ ।

            </p>


            <div class="form-flex">
                <div class="form-group">
                    <label for="">संस्थाले माग गरेको शेयर संख्या</label>
                    <input type="text" id="share_quantity" disabled="disabled" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">प्रति शेयर रु. १००</label>
                    <input disabled="disabled" id="share_amount" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">संघ संस्थाको पूरा नाम (नेपालीमा)</label>
                    <input name="company_name" type="text" class="form-control">
                </div>
                <div>
                    <label for="">संघ संस्थाको पूरा नाम (in English)</label>
                    <input name="company_name" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">दर्ता नंः</label>
                    <input name="company_reg_no" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">दर्ता गर्ने कार्यालयः</label>
                    <input name="company_reg_by" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">दर्ता भैएको मितिः</label>
                    <input name="company_reg_date" type="text" class="form-control">
                </div>
            </div>

            <div class="main-title">
                संस्थागत ठेगाना
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">प्रदेश</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">जिल्ला</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">न.पा / गा.पा. </label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">वडा नं. </label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">टोल</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="main-title">
                पत्राचार गर्ने ठेगाना
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">प्रदेश</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">जिल्ला</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">न.पा/गा.पा.</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">वडा नं.</label>
                    <input type="text" class="form-control">
                </div>

            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">टोल</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Website</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">फोन नं.</label>
                    <input type="text" class="form-control">
                </div>

            </div>
            <div class="main-title">संस्थाको प्रतिनिधिको विवरण</div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">संस्थाको प्रतिनिधिको नामः</label>
                    <input name="representative_detail" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">पद</label>
                    <input name="representative_designation" type="text" class="form-control">
                </div>
            </div>

            {{--<div class="main-title">Sanchalak Samitiko Detail</div>--}}
            {{--<table class="table table-bordered table-focus">--}}
                {{--<thead>--}}
                {{--<tr>--}}
                    {{--<th>S.N.</th>--}}
                    {{--<th>Name </th>--}}
                    {{--<th>Address</th>--}}
                    {{--<th>Designation</th>--}}
                    {{--<th>Father Name</th>--}}
                    {{--<th>Grand Father Name</th>--}}
                    {{--<th>Contact No</th>--}}
                    {{--<th>Citizenship No</th>--}}
                    {{--<th>Issure District</th>--}}
                    {{--<th>Remarks</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--<tr>--}}
                    {{--<td>1</td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}

                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>2</td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}
                    {{--<td><input type="text" class="form-control"></td>--}}

                {{--</tr>--}}

                {{--</tbody>--}}
            {{--</table>--}}
            {{--<div class="form-group">--}}
                {{--<a href="" class="btn btn-success"> Add More</a>--}}
            {{--</div>--}}


            <div class="main-title">आधिकारीक व्यक्तिको विवरण</div>

            <div class="row">
                <div class="col-md-10">
                    <div class="form-flex">
                        <div class="form-group">
                            <label for="">नाम</label>
                            <input name="authenticate_person_name" required type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">पद</label>
                            <input name="authenticate_person_designation" required type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="photo-upload">
                        <div class="photo-wrapper">
                            <img id="upload_with_preview" class="img-fluid" />
                            <div class="photo-text">
                                आधिकारीक दस्तखत
                            </div>
                        </div>
                        <input name="authenticate_person_signature" required  type="file" id="upload-button" />
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
</div>

<script>
    $('input[name="share_quantity"]').on('keyup',function () {
        var qty = $(this).val();
        $('#share_quantity').val(qty);
        var rate = $('input[name="share_rate"]').val();
        var amount = parseInt(qty) * parseInt(rate);
        $('#share_amount').val(amount);
        $('input[name="share_amount"]').val(amount);
    })
</script>
