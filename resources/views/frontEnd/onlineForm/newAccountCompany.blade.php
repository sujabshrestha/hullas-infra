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
                    Account Open Form
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
                यस <input type="text" > हब को–अपरेटिभ सर्भिस लि.को आह्वानअनुरुप संस्थाको शेयर सदस्यहुनको निमित संस्थाको विनियममा उल्लेखित शर्तहरुको अधिनमा रही सदस्यताशुल्क रु.


            </p>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Company Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Reg. No.</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Reg. Company</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Reg Date</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">PAN No.</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Tel No</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Mobile No</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>

            </div>

            <div class="form-group">
                <label for="">Account Type</label>
                <input type="text" class="form-control">
            </div>
            <div class="main-title">
                Account Member Name
            </div>
            <table class="table  table-bordered">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Mobile No</th>
                    <th>Address</th>

                </tr>

                </thead>
                <tbody>

                <tr>
                    <td>1</td>
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
                </tr>

                </tbody>
            </table>
            <div class="form-group">
                <a href="" class="btn btn-success"> Add More</a>
            </div>
            <div class="main-title">
                Sanchalak  Member Name
            </div>
            <table class="table  table-bordered" width="100%">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Mobile No</th>
                    <th>Address</th>

                </tr>

                </thead>
                <tbody>

                <tr>
                    <td>1</td>
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
                </tr>

                </tbody>
            </table>
            <div class="form-group">
                <a href="" class="btn btn-success"> Add More</a>
            </div>


            <div class="main-title">
                Specimen Signature
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Company Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Account Number</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-flex">
                        <div class="form-group">
                            <label for="">परिचय गराउनेको नाम  / Introducer Name</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">प्द / Designation</label>
                            <input type="text" class="form-control" />
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
                        <input type="file" id="upload-button" />
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
                        <input type="file" id="upload-button" />
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-flex">
                        <div class="form-group">
                            <label for="">परिचय गराउनेको नाम  / Introducer Name</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">प्द / Designation</label>
                            <input type="text" class="form-control" />
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
                        <input type="file" id="upload-button" />
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
                        <input type="file" id="upload-button" />
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-flex">
                        <div class="form-group">
                            <label for="">परिचय गराउनेको नाम  / Introducer Name</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">प्द / Designation</label>
                            <input type="text" class="form-control" />
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
                        <input type="file" id="upload-button" />
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
                        <input type="file" id="upload-button" />
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-flex">
                        <div class="form-group">
                            <label for="">परिचय गराउनेको नाम  / Introducer Name</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">प्द / Designation</label>
                            <input type="text" class="form-control" />
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
                        <input type="file" id="upload-button" />
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
                        <input type="file" id="upload-button" />
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-flex">
                        <div class="form-group">
                            <label for="">परिचय गराउनेको नाम  / Introducer Name</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">प्द / Designation</label>
                            <input type="text" class="form-control" />
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
                        <input type="file" id="upload-button" />
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
                        <input type="file" id="upload-button" />
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-flex">
                        <div class="form-group">
                            <label for="">परिचय गराउनेको नाम  / Introducer Name</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">प्द / Designation</label>
                            <input type="text" class="form-control" />
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
                        <input type="file" id="upload-button" />
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
                        <input type="file" id="upload-button" />
                    </div>
                </div>
            </div>

            <div class="main-title">
                Khata Sanchalan
            </div>
            <div class="form-flex">
                <div class="checkbox-wrap">
                    <input type="radio"  />

                    <label for="">Any two </label>
                </div>
                <div class="checkbox-wrap">

                    <input type="radio"  />

                    <label for="">Special Instruction</label>
                </div>
                <div class="form-group">
                    <label for="">Special Instruction</label>
                    <textarea name="" id="" cols="30" rows="5" class="form-control">

                            </textarea>
                </div>
            </div>
            <div class="main-title">Verification</div>
            <label for=""><Strong>From Co-operative Side</Strong></label>
            <div class="form-flex">
                <div class="form-group">
                    <label for=""> Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Designation</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" class="form-control">
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