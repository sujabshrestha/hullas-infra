@extends('admin.partials.master')

@push('styles')
<link href="{{ asset('cork/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/forms/switches.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/editors/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('contents')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Add images to album : {{ $album->title }}</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area br-6">
                    <div class="row">
                        <div class="col-lg-12 col-12 mx-auto">
                            <div class="jumbotron">
                                <div class="alert alert-danger print-error-msg" style="display:none">
                                    <ul></ul>
                                </div>
                                <div class="row">
                                <div class="col-8 mx-auto">
                                    <h5>Select Image To Upload</h5>
                                    <input type="file" id="image_submit" class="form-control">
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12 text-center">
                            <h4>Existing Images in Album:</h4>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="row jumbotron">
                                <div class="col-12">
                                    <h5 id="no_image" style="display: none;">No Images Uploaded.</h5>
                                </div>
                                <div class="col-12">
                                    <div class="preview_image row">
                                        <!-- Gallery Images are shown here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection

@push('scripts')
<script src="{{ asset('cork/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('cork/plugins/select2/custom-select2.js') }}"></script>
<script src="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
<script src="{{ asset('cork/plugins/editors/quill/quill.js') }}"></script>
<script src="{{ asset('cork/plugins/editors/quill/custom-quill.js') }}"></script>
<script src="https://malsup.github.io/jquery.blockUI.js"></script>

<script>
    $(document).ready(function(){
        get_images();
    });

    function get_images(){

        $.ajax({
            url: '{{ route('admin.album.get_images',$album->id) }}',
            contentType : false,
            processData : false,
            method: 'get',
            // data: formData,
            success: function(result)
            {
                $('.preview_image').empty();
                var images = result;
                console.log(images);
                if(images.length < 1){
                    console.log('No Images');
                    $('#no_image').show();
                }
                else {
                    $('#no_image').hide();
                    $.each(images, function (key, value) {
                        var url = '{{asset(':url')}}';
                        url = url.replace(":url", value.image);
                        var preview = jQuery("<div class='col-md-3'>" +
                            "<div class='card'>" +
                            "<div class='card-body text-center'>" +
                            "<a href='" + url + "' >" +
                            "<img src='" + url + "' alt='Click To View File' style='height: 100px; width: auto' />" +
                            "</a>" +
                            "</div>" +
                            "<div class='card-footer text-center'>" +
                            "<button class='btn btn-danger text-center delete_document' value='" + value.id + "'>Delete</button>" +
                            "<br>" +
                            "</div>" +
                            "</div>" +
                            "</div>");

                        $('.preview_image').append(preview);
                    })
                }
            },
            error: function(data)
            {
                console.log(data);
            }
        });


    }
</script>

<script>
    $('#image_submit').on('change',function(){
        $.blockUI();
                setTimeout(function () {

                    // Timer to unblock
                    $.unblockUI();
        }, 3000);

        $(".print-error-msg").find("ul").html('');
        var formData = new FormData();
        var myFile = $('#image_submit').prop('files')[0];
        console.log(myFile);
        formData.append('album_image',myFile);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content'),
            }
        });

        $.ajax({
            url: '{{ route("admin.album.upload_image",$album->id)}}',
            contentType: false,
            processData: false,
            method: 'POST',
            data : formData,

            success: function(result)
            {
                console.log(result);
                get_images();
                $("#image_submit").val(null);

            },
            error: function(data)
            {
                printErrorMsg(data.responseJSON.errors);
                $("#image_submit").val(null);
                document.getElementById('title').scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
            }

        })
    });
    function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
    }
</script>

<script>
    jQuery(document).on('click', '.delete_document', function (e) {
        e.preventDefault();
        $.blockUI();
                setTimeout(function () {

                    // Timer to unblock
                    $.unblockUI();
        }, 3000);

        var imageId = $(this).val();
        var url = '{{ route("admin.album.delete_image",":imageId") }}';
        url = url.replace(':imageId',imageId);
        $.ajax({
            url: url,
            contentType : false,
            processData : false,
            method: 'get',
            // data: formData,
            success: function(result)
            {
                get_images();
            },
            error: function(data)
            {
                console.log(data);
            }
        });
    });
</script>





@endpush
