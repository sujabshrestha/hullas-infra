@extends('frontEnd.layout.master')

@push('style')
@endpush

@section('content')

    <form action="" class="open-form">
        <div class="form-header container">
            <div class="logo-container">
                <img src="assets/images/logo-footer.png" class="img-fluid" alt="" />
            </div>
            <div class="header-items">

                <div class="university">
                    हब को-ओपेरटिव सर्विस ली.
                </div>
                <div class="faculty">
                    भक्तिमार्ग, बालुवाटार, काठमाडौं, नेपाल
                </div>
                <div class="application">
                    Membership Form
                </div>

            </div>
            <div class="photo-upload">
                <div class="photo-wrapper">
                    <img id="upload_with_preview_photo" class="img-fluid" />
                    <div class="photo-text">
                        Upload Company Stamp
                    </div>
                </div>
                <input type="file" id="upload-button-photo" />
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



                तिरी प्रति शेयर कित्ता रु. १००÷– (एक सय रुपैयाँ) दरका <input type="number"> कित्ता शेयर लिन मेरो÷हाम्रो इच्छ भएकोले उक्त शेयर संस्था बराबरको जम्मा रकम रु. <input type="number"> बुझाउनमञ्जुर छु/छौ । शेयर वापतको रकम यस संस्थाले आह्वान गरेको समयमातिर्न/बुझाउननसके संस्थाको नियमबमोजिम सहुँलाबुझाउँला । अतः उल्लेखित विवरण अनुसारको मेरो÷हाम्रो नाममा शेयर पाउने व्यवस्था गरिदिनु हुन अनुरोध गर्दछु/गर्दछौँ ।

            </p>


            <div class="form-flex">
                <div class="form-group">
                    <label for="">Applied Share Amount by Company</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Total Amount (100 per Share)</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Company Full Name</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Reg No</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Reg By</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Reg Date</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="main-title">
                Company Address
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Province</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">District</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Municipality/VDC</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Ward No</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tole</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="main-title">
                Mailing Address
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Province</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">District</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Municipality/VDC</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Ward No</label>
                    <input type="text" class="form-control">
                </div>

            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Tole</label>
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
                    <label for="">Phone No</label>
                    <input type="text" class="form-control">
                </div>

            </div>
            <div class="main-title">Representative Detail</div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Designation</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="main-title">Sanchalak Samitiko Detail</div>
            <table class="table table-bordered table-focus">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Name </th>
                    <th>Address</th>
                    <th>Designation</th>
                    <th>Father Name</th>
                    <th>Grand Father Name</th>
                    <th>Contact No</th>
                    <th>Citizenship No</th>
                    <th>Issure District</th>
                    <th>Remarks</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>

                </tr>
                <tr>
                    <td>2</td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>

                </tr>

                </tbody>
            </table>
            <div class="form-group">
                <a href="" class="btn btn-success"> Add More</a>
            </div>


            <div class="main-title">Authenticate Person</div>

            <div class="row">
                <div class="col-md-10">
                    <div class="form-flex">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Designation</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="photo-upload">
                        <div class="photo-wrapper">
                            <img id="upload_with_preview" class="img-fluid" />
                            <div class="photo-text">
                                निवेदकको दस्तखत
                            </div>
                        </div>
                        <input type="file" id="upload-button" />
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
@endpush