<div class="border border-dark mb-3">

    <form action="{{ route('front.form.kym.store') }}" method="post" class="open-form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="form_id" value="{{$form->id}}">
        <input type="hidden" name="form_user_id" value="{{$formUser->id}}">

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
                    Company KYM Form
                </div>

            </div>
            <div class="photo-upload">
                <div class="photo-wrapper">
                    <img id="upload_with_preview_photo" class="img-fluid" />
                    <div class="photo-text">
                        Upload Company Stamp
                    </div>
                </div>
                <input type="file" name="company_stamp" id="upload-button-photo" />
            </div>

        </div>
        <div class="form-content container">



            <div class="form-flex">
                <div class="form-group">
                    <label for="">संस्थाको पुरा नाम </label>
                    <input type="text" name="company_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">ठेगाना</label>
                    <input type="text" name="company_address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">फोन नं. </label>
                    <input type="text" name="company_phone" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">ईमेल</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">वेभसाइट</label>
                    <input type="text" name="website" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">संस्था दर्ता नं</label>
                    <input type="text" name="red_no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">संस्थाको स्थायी लेखा नं.</label>
                    <input type="text" name="pan_no" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">सदस्य संख्या.</label>
                    <input type="text" name="member_no" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">पुरुष</label>
                    <input type="text" name="male_count" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">महिला</label>
                    <input type="text" name="female_count" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">अन्य</label>
                    <input type="text" name="others" class="form-control">
                </div>
            </div>

            <div class="main-title">
                संस्थाको शाखा
            </div>
            <label for=""><strong>संस्थाको सेवा केन्द्र (शाखा) छ भने त्यसको विवरण </strong></label>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">ठेगाना</label>
                    <input type="text" name="address[0]" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">फोन नं.</label>
                    <input type="text" name="phone[0]" class="form-control">
                </div>


            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">ठेगाना</label>
                    <input type="text" name="address[1]" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">फोन नं.</label>
                    <input type="text" name="phone[1]" class="form-control">
                </div>


            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">ठेगाना</label>
                    <input type="text" name="address[2]" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">फोन नं.</label>
                    <input type="text" name="phone[2]" class="form-control">
                </div>


            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">ठेगाना</label>
                    <input type="text" name="address[3]" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">फोन नं.</label>
                    <input type="text" name="phone[3]" class="form-control">
                </div>


            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">ठेगाना</label>
                    <input type="text" name="address[4]" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Phone No</label>
                    <input type="text" name="phone[4]" class="form-control">
                </div>


            </div>
            <div class="main-title">
                शेयर चुक्ता पूँजि
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">शेयर चुक्ता पूँजि </label>
                    <input type="text" name="share" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">निक्षेप दायित्व </label>
                    <input type="text" name="liability" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">कर्जा लगानी</label>
                    <input type="text" name="karja" class="form-control">
                </div>

            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">सापटी  (दायित्व)</label>
                    <input type="text" name="loan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">खुद बचत (नाफा) </label>
                    <input type="text" name="saving" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">अन्य लगानी</label>
                    <input type="text" name="financial_other" class="form-control">
                </div>
            </div>
            <div class="main-title">
                कारोबारको किसिमः
            </div>
            <div class="form-flex">
                <div class="checkbox-wrap">
                    <input type="radio" name="transaction_type" value="saving"  />

                    <label for="">बचत तथा ऋण </label>
                </div>
                <div class="checkbox-wrap">

                    <input type="radio" name="transaction_type" value="agriculture" />

                    <label for="">कृषिजन्य</label>
                </div>
                <div class="checkbox-wrap">

                    <input type="radio" name="transaction_type" value="industry" />

                    <label for="">उद्योग</label>
                </div>
                <div class="checkbox-wrap">

                    <input type="radio" name="transaction_type" value="business"/>

                    <label for="">व्यापार</label>
                </div>
                <div class="checkbox-wrap">

                    <input type="radio" name="transaction_type" value="multipurpose" />

                    <label for="">बहुउदेश्यीय </label>
                </div>
                <div class="checkbox-wrap">

                    <input type="radio" name="transaction_type" value="dairy" />

                    <label for="">दुग्ध</label>
                </div>
                <div class="checkbox-wrap">

                    <input type="radio" name="transaction_type" value="other" />

                    <label for="">अन्य </label>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label for=""><strong>मुख्य कारोबारको वस्तु / सेवा</strong></label>
                <textarea name="major_service" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="main-title">
                कार्य क्षेत्र
            </div>

            <div class="form-flex">
                <div class="form-group">
                    <label for="">जिल्ला संख्या</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">म.न.पा. / उ.म.न.पा. / गा.पा. संख्या </label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="main-title">
                कर्मचारी संख्या
            </div>

            <div class="form-flex">
                <div class="form-group">
                    <label for="">पुरुष </label>
                    <input name="staff_male_count" type="number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">महिला   </label>
                    <input name="staff_female_count" type="number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">जम्मा</label>
                    <input name="staff_total_count" type="number" class="form-control">
                </div>


            </div>
            <hr>
            <div class="form-group">
                <label for=""> <Strong>पछिल्लो साधारण सभा भएको मिति </Strong></label>
                <input type="text" name="last_sabha_date" class="form-control">
            </div>
            <div class="main-title">सञ्चालक समितिको विवरण </div>
            <table class="table table-bordered table-focus table-sanchalak">
                <thead>
                <tr>
                    <th>क्र.सं.</th>
                    <th>नाम, थर </th>
                    <th>हालको ठेगाना</th>
                    <th>पद</th>
                    <th>बाबुको नाम</th>
                    <th>बाजेको नाम</th>
                    <th>सम्पर्क नं.</th>
                    <th>ना.प्र.नं.</th>
                    <th>जारी गर्ने जिल्ला</th>
                    <th>कैफियत</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <div class="form-group">
                <button class="btn btn-success btn-add-sanchalak"> नयाँ थप्नुहोस् </button>
            </div>

            <!-- <div class="template-wrap">
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                   <label for="">Designation</label>
                   <input type="text" class="form-control">
               </div>

            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Father Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Grand Father Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                   <label for="">Contact No</label>
                   <input type="text" class="form-control">
               </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Citizenship No</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Issue District</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                   <label for="">Remarks</label>
                   <input type="text" class="form-control">
               </div>
            </div>
            </div>
            <div class="form-group">
                <a href="" class="btn btn-success"> Add More</a>
            </div> -->


            <div class="main-title">खाता सञ्चालनको विवरण</div>
            <table class="table table-bordered table-focus table-sanchalakAccount">
                <thead>
                <tr>
                    <th>क्र.सं.</th>
                    <th>नाम, थर </th>
                    <th>हालको ठेगाना</th>
                    <th>पद</th>
                    <th>बाबुको नाम</th>
                    <th>बाजेको नाम</th>
                    <th>सम्पर्क नं.</th>
                    <th>ना.प्र.नं.</th>
                    <th>जारी गर्ने जिल्ला</th>
                    <th>कैफियत</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <div class="form-group">
                <button href="" class="btn btn-success btn-add-sanchalakAccount"> नयाँ थप्नुहोस् </button>
            </div>

            <div class="main-title">पेश गर्नेको विवरण</div>

            <div class="row">
                <div class="col-md-10">
                    <div class="form-flex">
                        <div class="form-group">
                            <label for="">नाम</label>
                            <input name="applicant_name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">पद</label>
                            <input name="applicant_designation" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="photo-upload">
                        <div class="photo-wrapper">
                            <img id="upload_with_preview" class="img-fluid" />
                            <div class="photo-text">
                                पेश गर्नेको दस्तखत
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
</div>


<script>
    // multiple sanchalak-samiti-details
    jQuery(document).on('click', '.btn-delete-sanchalak', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.closest("tr").remove();
    });

    jQuery(document).on('click', '.btn-add-sanchalak', function (e) {
        e.preventDefault();
        var rowCount = $('table.table-sanchalak > tbody > tr').length;
        if(rowCount === 14){
            alert('Cannot add more fields!');
            return false;
        }
        var lastRow = $('table.table-sanchalak > tbody > tr').last().attr('data-row');
        var counter = lastRow ? parseInt(lastRow) + 1 : 1;
        var randomInteger = Math.random();
        var newRow = jQuery('<tr data-row="' + counter + '">' +
            '<td>' + counter + '</td>' +
            '<td><input name="sanchalak_name['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalak_address['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalak_designation['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalak_father['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalak_grandfather['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalak_contact['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalak_citizenship_no['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalak_citizenship_district['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalak_remarks['+ randomInteger +']" class="form-control" required>' +
            '<td><button type="button" class="btn btn-danger btn-sm btn-delete-sanchalak" data-feature=""><i class="fa fa-minus-circle"></i></button></td>' +
            '</tr>');
        jQuery('table.table-sanchalak').append(newRow);
    });


</script>

<script>
    // multiple khaata-sanchalak-details
    jQuery(document).on('click', '.btn-delete-sanchalakAccount', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.closest("tr").remove();
    });

    jQuery(document).on('click', '.btn-add-sanchalakAccount', function (e) {
        e.preventDefault();
        var rowCount = $('table.table-sanchalakAccount > tbody > tr').length;
        if(rowCount === 7){
            alert('Cannot add more fields!');
            return false;
        }
        var lastRow = $('table.table-sanchalakAccount > tbody > tr').last().attr('data-row');
        var counter = lastRow ? parseInt(lastRow) + 1 : 1;
        var randomInteger = Math.random();
        var newRow = jQuery('<tr data-row="' + counter + '">' +
            '<td>' + counter + '</td>' +
            '<td><input name="sanchalakAccount_name['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalakAccount_address['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalakAccount_designation['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalakAccount_father['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalakAccount_grandfather['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalakAccount_contact['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalakAccount_citizenship_no['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalakAccount_citizenship_district['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalakAccount_remarks['+ randomInteger +']" class="form-control" required>' +
            '<td><button type="button" class="btn btn-danger btn-sm btn-delete-sanchalakAccount" data-feature=""><i class="fa fa-minus-circle"></i></button></td>' +
            '</tr>');
        jQuery('table.table-sanchalakAccount').append(newRow);
    });


</script>