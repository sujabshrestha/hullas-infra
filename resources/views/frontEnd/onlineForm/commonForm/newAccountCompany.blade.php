<div class="border border-dark mb-3">
    <form action="{{ route('front.form.new-account-company.store') }}" method="post" enctype="multipart/form-data" class="open-form">
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
                    खाता खोल्ने फाराम
                </div>

            </div>

        </div>
        <div class="form-content container">
            <div class="salutation">
                <h5>श्री सञ्चालक समिति</h5>
                <h5>हब को–अपरेटिभ सर्भिस लि.</h5>
                <h5>बलुवाटार, काठमाण्डौँ</h5>

            </div>

            <p class="share-form-detail">
                यस <input type="text" name="company_name" data-transfer="company_name" class="detail_transfer_by_class"> हब को–अपरेटिभ सर्भिस लि.को आह्वानअनुरुप संस्थाको शेयर सदस्यहुनको निमित संस्थाको विनियममा उल्लेखित शर्तहरुको अधिनमा रही सदस्यताशुल्क रु.


            </p>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">संघ/संस्थाको नाम</label>
                    <input type="text" readonly class="form-control company_name">
                </div>
                <div class="form-group">
                    <label for="">ठेगानाः</label>
                    <input name="company_address" type="text" class="form-control detail_transfer_by_class" data-transfer="company_address">
                </div>
                <div class="form-group">
                    <label for="">दर्ता नंः</label>
                    <input name="company_reg_no" type="text" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">दर्ता कार्यालयः</label>
                    <input name="reg_company" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">दर्ता मितिः</label>
                    <input name="reg_date" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">प्यान नंः</label>
                    <input name="pan_no" type="text" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">टेलिफोन नंः</label>
                    <input name="tel_no" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">मोबाईल नं.</label>
                    <input name="mobile_no" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">ई –मेलः</label>
                    <input name="company_email" type="text" class="form-control">
                </div>

            </div>

            <div class="form-group">
                <label for="">खाताको प्रकारः</label>
                <input name="account_type" type="text" class="form-control">
            </div>
            <div class="main-title">
                खाता सञ्चालकहरुको नामावलीः
            </div>
            <table class="table  table-bordered">
                <thead>
                <tr>
                    <th>क्त.सं.</th>
                    <th>नाम</th>
                    <th>पद</th>
                    <th>मोबाईल नं</th>
                    <th>निवासको ठेगाना</th>

                </tr>

                </thead>
                <tbody>
                <?php $min_row = 6; ?>
                @for($i=1; $i<=$min_row; $i++)
                    <tr>
                        <td>{{$i}}</td>
                        <td><input data-id="sa_name{{$i}}" name="sanchalakAccount_name[{{$i}}]" type="text" class="form-control transferable"></td>
                        <td><input data-id="sa_designation{{$i}}" name="sanchalakAccount_designation[{{$i}}]"  type="text" class="form-control transferable"></td>
                        <td><input name="sanchalakAccount_mobile_no[{{$i}}]" type="text" class="form-control"></td>
                        <td><input name="sanchalakAccount_address[{{$i}}]" type="text" class="form-control"></td>
                    </tr>
                @endfor

                </tbody>
            </table>

            <div class="main-title">
                सञ्चालक समितिको नामावलीः
            </div>
            <table class="table  table-bordered table-sanchalakAccount" width="100%">
                <thead>
                <tr>
                    <th>क्त.सं.</th>
                    <th>नाम/थर</th>
                    <th>पद</th>
                    <th>मोबाईल नं</th>
                    <th>ठेगाना</th>
                    <th></th>
                </tr>

                </thead>
                <?php $min_row = 5; ?>
                @for($i=1; $i<=$min_row; $i++)
                    <tr data-row="{{$i}}">
                        <td>{{$i}}</td>
                        <td><input type="text" name="sanchalak_name[{{$i}}]" class="form-control"></td>
                        <td><input type="text" name="sanchalak_designation[{{$i}}]" class="form-control"></td>
                        <td><input type="text" name="sanchalak_mobile_no[{{$i}}]" class="form-control"></td>
                        <td><input type="text" name="sanchalak_address[{{$i}}]" class="form-control"></td>
                        <td></td>
                    </tr>
                @endfor
                <tbody>

                </tbody>
            </table>
            <div class="form-group">
                <a href="" class="btn btn-success btn-add-sanchalakAccount"> Add More</a>
            </div>


            <div class="main-title">
                दस्तखतको नमूना पत्र
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">खातावाला संघ/संस्थाको नाम</label>
                    <input type="text" readonly class="form-control company_name">
                </div>
                <div class="form-group">
                    <label for="">ठेगाना </label>
                    <input type="text" readonly class="form-control company_address">
                </div>
                <div class="form-group">
                    <label for="">खता नं</label>
                    <input name="account_no" type="text" class="form-control">
                </div>
            </div>
            <hr>
            <?php $min_row=6; ?>
            @for($i=1; $i<=$min_row; $i++)
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-flex">
                            <div class="form-group">
                                <label for="">परिचय गराउनेको नाम  / Introducer Name</label>
                                <input id="sa_name{{$i}}" type="text" class="form-control" readonly />
                            </div>
                            <div class="form-group">
                                <label for="">पद / Designation</label>
                                <input id="sa_designation{{$i}}" type="text" class="form-control" readonly />
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="photo-upload">
                            <div class="photo-wrapper">
                                <img id="upload_with_preview" class="img-fluid" />
                                <div class="photo-text">
                                    परिचय गराउनेको दस्तखत
                                </div>
                            </div>
                            <input name="sanchalakAccount_signature[{{$i}}]" type="file" id="upload-button" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="photo-upload">
                            <div class="photo-wrapper">
                                <img id="upload_with_preview" class="img-fluid" />
                                <div class="photo-text">
                                    परिचय गराउनेको फोटो
                                </div>
                            </div>
                            <input name="sachalakAccount_photo[{{$i}}]" type="file" id="upload-button" />
                        </div>
                    </div>
                </div>
                <hr>
            @endfor
            <div class="main-title">
                खाता सञ्चालन
            </div>
            <div class="form-flex">
                <div class="checkbox-wrap">
                    <input name="khata_sanchalan" value="any_two" type="radio"  />

                    <label for="">कुनै दुई </label>
                </div>
                <div class="checkbox-wrap">

                    <input name="khata_sanchalan" value="special" type="radio"  />

                    <label for="">विशेष</label>
                </div>
                <div class="form-group">
                    <label for="">विशेष निर्देशन </label>
                    <textarea name="special_instruction" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="main-title">प्रमाणित गर्ने</div>
            <label for=""><Strong>सहकारी संघ/संस्थाको तर्फबाट</Strong></label>
            <div class="form-flex">
                <div class="form-group">
                    <label for=""> नाम </label>
                    <input name="verification_name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">पद </label>
                    <input name="verification_designation" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">मिति </label>
                    <input name="verification_date" type="text" class="form-control">
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
    $('.detail_transfer_by_class').on('keyup',function () {
        var value = $(this).val();
        var target_class = $(this).attr('data-transfer');
        var target = $('.'+target_class);
        target.val(value);
    })
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
        if(rowCount === 16){
            alert('Cannot add more fields!');
            return false;
        }
        var lastRow = $('table.table-sanchalakAccount > tbody > tr').last().attr('data-row');
        var counter = lastRow ? parseInt(lastRow) + 1 : 1;
        var randomInteger = Math.random();
        var newRow = jQuery('<tr data-row="' + counter + '">' +
            '<td>' + counter + '</td>' +
            '<td><input name="sanchalak_name['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalak_designation['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalak_mobile_no['+ randomInteger +']" class="form-control" required>' +
            '<td><input name="sanchalak_address['+ randomInteger +']" class="form-control" required>' +
            '<td><button type="button" class="btn btn-danger btn-sm btn-delete-sanchalakAccount" data-feature=""><i class="fa fa-minus-circle"></i></button></td>' +
            '</tr>');
        jQuery('table.table-sanchalakAccount').append(newRow);
    });


</script>

<script>
    $('.transferable').on('keyup',function () {
        var target_id = $(this).attr('data-id');
        var target = $('#'+target_id);
        if(target){
            $(target).val($(this).val());
        }
    })
</script>