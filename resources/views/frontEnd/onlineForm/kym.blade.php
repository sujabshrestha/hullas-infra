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
                <input type="file" id="upload-button-photo" />
            </div>

        </div>
        <div class="form-content container">



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
                    <label for="">Phone. No.</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Website</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Reg No</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">PAN No.</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Member No.</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Male</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Female</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Other</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="main-title">
                Branches Information
            </div>
            <label for=""><strong>If any branches are running</strong></label>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Phone No</label>
                    <input type="text" class="form-control">
                </div>


            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Phone No</label>
                    <input type="text" class="form-control">
                </div>


            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Phone No</label>
                    <input type="text" class="form-control">
                </div>


            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Phone No</label>
                    <input type="text" class="form-control">
                </div>


            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Phone No</label>
                    <input type="text" class="form-control">
                </div>


            </div>
            <div class="main-title">
                Financial Information
            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Share</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Liability</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Loan</label>
                    <input type="text" class="form-control">
                </div>

            </div>
            <div class="form-flex">
                <div class="form-group">
                    <label for="">Liability</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Saving</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">other</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="main-title">
                Transaction Type
            </div>
            <div class="form-flex">
                <div class="checkbox-wrap">
                    <input type="checkbox"  />

                    <label for="">Saving and Credit </label>
                </div>
                <div class="checkbox-wrap">

                    <input type="checkbox"  />

                    <label for="">Agricultural</label>
                </div>
                <div class="checkbox-wrap">

                    <input type="checkbox"  />

                    <label for="">Industrial</label>
                </div>
                <div class="checkbox-wrap">

                    <input type="checkbox"  />

                    <label for="">Business</label>
                </div>
                <div class="checkbox-wrap">

                    <input type="checkbox"  />

                    <label for="">Multipurpose</label>
                </div>
                <div class="checkbox-wrap">

                    <input type="checkbox"  />

                    <label for="">Dhugda</label>
                </div>
                <div class="checkbox-wrap">

                    <input type="checkbox"  />

                    <label for="">Other</label>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label for=""><strong>Major Service</strong></label>
                <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="main-title">
                Working Area
            </div>

            <div class="form-flex">
                <div class="form-group">
                    <label for="">District Number</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">VDC / Municipalitty Number</label>
                    <input type="text" class="form-control">
                </div>



            </div>
            <div class="main-title">
                Staff Number
            </div>

            <div class="form-flex">
                <div class="form-group">
                    <label for="">Male</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Female</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Other</label>
                    <input type="number" class="form-control">
                </div>


            </div>
            <hr>
            <div class="form-group">
                <label for=""> <Strong>Last sadharad sabhako date</Strong></label>
                <input type="date" class="form-control">
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


            <div class="main-title">Khata sanchalak Detail</div>
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

            <div class="main-title">Applicant Detail</div>

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