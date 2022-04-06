@extends('admin.partials.master')

@push('styles')
    <link href="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet"
        type="text/css" />
@endpush

@section('contents')
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
            <div id="breadcrumbArrowed" class="col-xl-12 col-lg-12 layout-top-spacing mb-3">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Site Setting</h4>

                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area text-center">

                        <div class="row">
                            <div class="col-sm-12">
                                <nav class="breadcrumb-two" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active"><a href="{{ route('admin.site') }}">Site
                                                Setting</a></li>

                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    {!! Form::open(['url' => route('admin.site.update'), 'enctype' => 'multipart/form-data']) !!}

                    <div class="form-group">
                        <p>Site Title<span class="text-danger">*</span></p>
                        <label for="title" class="sr-only">Site Title</label>
                        {{ Form::text('site_title', old('site_title') ?? (getSiteSetting('site_title') ?? ''), ['class' => 'form-control','placeholder' => 'Site Title...','required']) }}
                        <small class="text-danger alert-message">{{ $errors->first('first_name') }}</small>
                    </div>

                    <div class="form-group">
                        <p>Site Description<span class="text-danger">*</span></p>
                        <label for="title" class="sr-only">Site Description</label>
                        {{ Form::text('site_Description', old('site_Description') ?? (getSiteSetting('site_Description') ?? ''), ['class' => 'form-control','placeholder' => 'Site Description...','required']) }}
                        <small class="text-danger alert-message">{{ $errors->first('site_Description') }}</small>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p>Site Logo</p>
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <label>Clear <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                            title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                            accept="image/*" name="logo">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <p>Site Favicon</p>
                                <div class="custom-file-container" data-upload-id="mySecondImage">
                                    <label>Clear <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                            title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                            accept="image/*" name="favicon">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <p>Primary Phone<span class="text-danger">*</span></p>
                        <label for="title" class="sr-only">Primary Phone</label>
                        {{ Form::number('primary_phone', old('primary_phone') ?? (getSiteSetting('primary_phone') ?? ''), ['class' => 'form-control','placeholder' => 'Primary Phone...','required']) }}
                        <small class="text-danger alert-message">{{ $errors->first('primary_phone') }}</small>
                    </div>
                    <div class="form-group">
                        <p>Secondary Phone<span class="text-danger">*</span></p>
                        <label for="title" class="sr-only">Secondary Phone</label>
                        {{ Form::number('secondary_phone', old('secondary_phone') ?? (getSiteSetting('secondary_phone') ?? ''), ['class' => 'form-control','placeholder' => 'Secondary Phone...','required']) }}
                        <small class="text-danger alert-message">{{ $errors->first('secondary_phone') }}</small>
                    </div>
                    <div class="form-group">
                        <p>Address<span class="text-danger">*</span></p>
                        <label for="title" class="sr-only">Address</label>
                        {{ Form::text('address', old('address') ?? (getSiteSetting('address') ?? ''), ['class' => 'form-control','placeholder' => 'Address...']) }}
                        <small class="text-danger alert-message">{{ $errors->first('address') }}</small>
                    </div>

                    <div class="form-group">
                        <p>Primary Email<span class="text-danger">*</span></p>
                        <label for="title" class="sr-only">Primary Email</label>
                        {{ Form::email('primary_email', old('primary_email') ?? (getSiteSetting('primary_email') ?? ''), ['class' => 'form-control','placeholder' => 'Primary Email...','required']) }}
                        <small class="text-danger alert-message">{{ $errors->first('primary_email') }}</small>
                    </div>
                    <div class="col-12">
                        <h1 style="margin-left:30%" class="mb-2 mt-2">Social Settings</h1>
                    </div>
                    <div class="form-group">
                        <p>Facebook Link<span class="text-danger">*</span></p>
                        <label for="fb_link" class="sr-only">Facebook Link</label>
                        {{ Form::text('fb_link', old('fb_link') ?? (getSiteSetting('fb_link') ?? ''), ['class' => 'form-control','placeholder' => 'Facebook Link...']) }}
                        <small class="text-danger alert-message">{{ $errors->first('fb_link') }}</small>
                    </div>
                    <div class="form-group">
                        <p>Instagram Link<span class="text-danger">*</span></p>
                        <label for="fb_link" class="sr-only">Instagram Link</label>
                        {{ Form::text('insta_link', old('insta_link') ?? (getSiteSetting('insta_link') ?? ''), ['class' => 'form-control','placeholder' => 'Instagram Link...']) }}
                        <small class="text-danger alert-message">{{ $errors->first('fb_link') }}</small>
                    </div>

                    <div class="form-group">
                        <p>LinkedIn Link<span class="text-danger">*</span></p>
                        <label for="youtube_link" class="sr-only">LinkedIn Link</label>
                        {{ Form::text('youtube_link', old('youtube_link') ?? (getSiteSetting('youtube_link') ?? ''), ['class' => 'form-control','placeholder' => 'LinkedIn Link...']) }}
                        <small class="text-danger alert-message">{{ $errors->first('youtube_link') }}</small>
                    </div>

                    <div class="form-group">
                        <p>Twitter Link<span class="text-danger">*</span></p>
                        <label for="title" class="sr-only">Twitter Link</label>
                        {{ Form::text('twitter_link', old('twitter_link') ?? (getSiteSetting('twitter_link') ?? ''), ['class' => 'form-control','placeholder' => 'Twitter Link...']) }}
                        <small class="text-danger alert-message">{{ $errors->first('twitter_link') }}</small>
                    </div>

                    <div class="form-group">
                        <p>Map Location<span class="text-danger">*</span></p>
                        <label for="title" class="sr-only">Map Location</label>
                        {{ Form::text('map_location', old('map_location') ?? (getSiteSetting('map_location') ?? ''), ['class' => 'form-control','placeholder' => 'Map Location...','required']) }}
                        <small class="text-danger alert-message">{{ $errors->first('map_location') }}</small>
                    </div>
                    <div class="col-12">
                        <h2 style="margin-left:30%; ">About Us</h2>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="about_description" id="" class="summernote">
                                    {!! getSiteSetting('about_description') ?? '' !!}
                                </textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <p>Feature Image</p>
                                <div class="custom-file-container" data-upload-id="AboutusImage">
                                    <label>Clear <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                            title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                            accept="image/*" name="aboutus_image">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p>Recognized Agent of</p>
                                <div class="custom-file-container" data-upload-id="recognisedagentof">
                                    <label>Clear <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                            title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                            accept="image/*" name="recognisedagentof">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <p>Trained Agent of</p>
                                <div class="custom-file-container" data-upload-id="trainedagentof">
                                    <label>Clear <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                            title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                            accept="image/*" name="trainedagentof">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <h2 style="margin-left:30%; ">Approved by Image</h2>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p>Approved By MoE</p>
                                <div class="custom-file-container" data-upload-id="FooterImage">
                                    <label>Clear <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                            title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                            accept="image/*" name="footer_image">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <p>Member of ECan</p>
                                <div class="custom-file-container" data-upload-id="memberofecan">
                                    <label>Clear <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                            title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                            accept="image/*" name="memberofecan">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p>Recognized Agent of</p>
                                <div class="custom-file-container" data-upload-id="recognisedagentof">
                                    <label>Clear <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                            title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                            accept="image/*" name="recognisedagentof">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <p>Trained Agent of</p>
                                <div class="custom-file-container" data-upload-id="trainedagentof">
                                    <label>Clear <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                            title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                            accept="image/*" name="trainedagentof">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                    {{-- <div class="form-group">
                        <p>Secondary Phone</p>
                        <label for="title" class="sr-only">Secondary Phone</label>
                        {{ Form::number('secondary_phone',old('secondary_phone')??getSiteSetting('secondary_phone')??'',['class' => 'form-control','placeholder'=> 'Secondary Phone...']) }}
                        <small class="text-danger alert-message">{{ $errors->first('secondary_phone') }}</small>
                    </div>

                    <div class="form-group">
                        <p>Primary Email<span class="text-danger">*</span></p>
                        <label for="title" class="sr-only">Primary Email</label>
                        {{ Form::email('primary_email',old('primary_email')??getSiteSetting('primary_email')??'',['class' => 'form-control','placeholder'=> 'Primary Email...', 'required']) }}
                        <small class="text-danger alert-message">{{ $errors->first('primary_email') }}</small>
                    </div>

                    <div class="form-group">
                        <p>Secondary Email</p>
                        <label for="title" class="sr-only">Secondary Email</label>
                        {{ Form::email('secondary_email',old('secondary_email')??getSiteSetting('secondary_email')??'',['class' => 'form-control','placeholder'=> 'Secondary Email...']) }}
                        <small class="text-danger alert-message">{{ $errors->first('secondary_email') }}</small>
                    </div>

                    <div class="form-group">
                        <p>Sales Email<span class="text-danger">*</span></p>
                        <label for="title" class="sr-only">Sales Email</label>
                        {{ Form::email('sales_email',old('sales_email')??getSiteSetting('sales_email')??'',['class' => 'form-control','placeholder'=> 'Sales Email...', 'required']) }}
                        <small class="text-danger alert-message">{{ $errors->first('sales_email') }}</small>
                    </div>

                    <div class="form-group">
                        <p>Address<span class="text-danger">*</span></p>
                        <label for="title" class="sr-only">Address</label>
                        {{ Form::text('address',old('address')??getSiteSetting('address')??'',['class' => 'form-control','placeholder'=> 'Address...']) }}
                        <small class="text-danger alert-message">{{ $errors->first('address') }}</small>
                    </div>



                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <p>AboutUs Banner</p>
                                <div class="custom-file-container" data-upload-id="myFourthImage">
                                    <label>Clear <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file" >
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="about_banner">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <p>About us<span class="text-danger">*</span></p>
                                <label for="title" class="sr-only">About Us</label>
                                {{ Form::textarea('about', old('about')??getSiteSetting('about')??'') }}
                                <small class="text-danger alert-message">{{ $errors->first('about') }}</small>
                            </div>
                        </div>
                    </div>
<hr>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <p>Chairman Photo</p>
                                <div class="custom-file-container" data-upload-id="myThirdImage">
                                    <label>Clear <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file" >
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="chairman_photo">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <p>Chairman Message<span class="text-danger">*</span></p>
                                <label for="title" class="sr-only">Chairman Message</label>
                                {{ Form::textarea('chairman_message', old('about')??getSiteSetting('chairman_message')??'') }}
                                <small class="text-danger alert-message">{{ $errors->first('chairman_message') }}</small>
                            </div>
                        </div>
                    </div> --}}

                    {{ Form::submit('Update', ['class' => 'mt-4 btn btn-primary']) }}
                    {!! Form::close() !!}
                </div>
            </div>

        </div>

    </div>
    <div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

    </div>
@endsection

@push('scripts')

    <script src="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>

    <script>
        //First upload .
        @if (getSiteSetting('logo'))
            var importedBaseImage = "{{ asset(getSiteSetting('logo')) }}"
            var firstUpload = new FileUploadWithPreview('myFirstImage', {
            images: {
            baseImage: importedBaseImage,
            },
            })
        @else
            var firstUpload = new FileUploadWithPreview('myFirstImage')
        @endif

        //Second upload .
        @if (getSiteSetting('favicon'))
            var importedBaseImage2 = "{{ asset(getSiteSetting('favicon')) }}"
            var mySecondImage = new FileUploadWithPreview('mySecondImage', {
            images: {
            baseImage: importedBaseImage2,
            },
            })
        @else
            var firstUpload = new FileUploadWithPreview('mySecondImage')
        @endif

        //third upload .
        @if (getSiteSetting('chairman_photo'))
            // var importedBaseImage2 = "{{ asset(getSiteSetting('chairman_photo')) }}"
            // var myThirdImage = new FileUploadWithPreview('myThirdImage', {
            // images: {
            // baseImage: importedBaseImage2,
            // },
            // })
            //
        @else
            // var firstUpload = new FileUploadWithPreview('myThirdImage')
            //
        @endif

        //fourth upload .
        @if (getSiteSetting('about_banner'))
            // var importedBaseImage2 = "{{ asset(getSiteSetting('about_banner')) }}"
            // var myThirdImage = new FileUploadWithPreview('myFourthImage', {
            // images: {
            // baseImage: importedBaseImage2,
            // },
            // })
            //
        @else
            // var firstUpload = new FileUploadWithPreview('myFourthImage')
            //
        @endif

        //footer image .

        @if (getSiteSetting('aboutus_image'))
            var importedBaseImage2 = "{{ asset(getSiteSetting('aboutus_image')) }}"
            var FooterImage = new FileUploadWithPreview('AboutusImage', {
            images: {
            baseImage: importedBaseImage2,
            },
            })
        @else
            var firstUpload = new FileUploadWithPreview('AboutusImage')
        @endif

        @if (getSiteSetting('footer_image'))
            var importedBaseImage2 = "{{ asset(getSiteSetting('footer_image')) }}"
            var FooterImage = new FileUploadWithPreview('FooterImage', {
            images: {
            baseImage: importedBaseImage2,
            },
            })
        @else
            var firstUpload = new FileUploadWithPreview('FooterImage')
        @endif


        @if (getSiteSetting('memberofecan'))
            var importedBaseImage2 = "{{ asset(getSiteSetting('memberofecan')) }}"
            var FooterImage = new FileUploadWithPreview('memberofecan', {
            images: {
            baseImage: importedBaseImage2,
            },
            })
        @else
            var firstUpload = new FileUploadWithPreview('memberofecan')
        @endif

        @if (getSiteSetting('recognisedagentof'))
            var importedBaseImage2 = "{{ asset(getSiteSetting('recognisedagentof')) }}"
            var FooterImage = new FileUploadWithPreview('recognisedagentof', {
            images: {
            baseImage: importedBaseImage2,
            },
            })
        @else
            var firstUpload = new FileUploadWithPreview('recognisedagentof')
        @endif

        @if (getSiteSetting('trainedagentof'))
            var importedBaseImage2 = "{{ asset(getSiteSetting('trainedagentof')) }}"
            var FooterImage = new FileUploadWithPreview('trainedagentof', {
            images: {
            baseImage: importedBaseImage2,
            },
            })
        @else
            var firstUpload = new FileUploadWithPreview('trainedagentof')
        @endif
    </script>

@endpush
