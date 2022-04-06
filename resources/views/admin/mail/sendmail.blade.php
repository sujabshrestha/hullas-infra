@extends('admin.partials.master')

@push('styles')
<link href="{{ asset('cork/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/forms/switches.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/editors/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('contents')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
            <div id="breadcrumbArrowed" class="col-xl-12 col-lg-12 layout-top-spacing mb-3">
                @include('admin.partials.breadcrumbs', ['type'=>'create', 'label'=>'Mail', 'route'=>'mail'])
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="row">
                        <div class="col-lg-12 col-12 mx-auto">
                            <form method="post" enctype="multipart/form-data" action="{{ route('admin.mail.store') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <p>Salutation*</p>
                                                    <label for="t-text" class="sr-only">Salutation</label>
                                                    <input id="salutation" value="{{ old('salutation') }}" type="text" name="salutation" placeholder="Salutation..." class="form-control" required>
                                                    <small class="text-danger alert-message">{{ $errors->first('salutation') }}</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <p>Name*</p>
                                                    <label for="t-text" class="sr-only">Name</label>
                                                    <input id="name" value="{{ old('name') }}" type="text" name="name" placeholder="Name..." class="form-control" required>
                                                    <small class="text-danger alert-message">{{ $errors->first('name') }}</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <p>Designation*</p>
                                                    <label for="t-text" class="sr-only">Designation</label>
                                                    <input id="designation" value="{{ old('designation') }}" type="text" name="designation" placeholder="Designation..." class="form-control" required>
                                                    <small class="text-danger alert-message">{{ $errors->first('designation') }}</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <p>Organization*</p>
                                                    <label for="t-text" class="sr-only">Organization</label>
                                                    <input id="organization" value="{{ old('organization') }}" type="text" name="organization" placeholder="Organization..." class="form-control" required>
                                                    <small class="text-danger alert-message">{{ $errors->first('organization') }}</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <p>Subject*</p>
                                                    <label for="t-text" class="sr-only">Subject</label>
                                                    <input id="subject" value="{{ old('subject') }}" type="text" name="subject" placeholder="Subject..." class="form-control" required>
                                                    <small class="text-danger alert-message">{{ $errors->first('subject') }}</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <p>Organization Address*</p>
                                                    <label for="t-text" class="sr-only">Organization Address</label>
                                                    <input id="address" value="{{ old('address') }}" type="text" name="address" placeholder="Organization Address..." class="form-control" required>
                                                    <small class="text-danger alert-message">{{ $errors->first('address') }}</small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <p> Select Mail Sender*</p>
                                            <label for="t-text" class="sr-only"> Select Mail Sender*</label>
                                            <select class="form-control  basic" name="mail_sender">
                                                <option value="">Null</option>
                                                @foreach($senders as $sender)
                                                <option value="{{ $sender->id }}">{{ $sender->name }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <p> Mail To*</p>
                                            <label for="t-text" class="sr-only"> Mail To*</label>
                                            <input id="mail_to" value="{{ old('mail_to') }}" type="email" name="mail_to" placeholder="Mail To..." class="form-control" required>
                                            <small class="text-danger alert-message">{{ $errors->first('mail_to') }}</small>
                                        </div>

                                    </div>
                                </div>



                                <div class="form-group">
                                    <p>Body*</p>
                                    <textarea name="body">{{ old('body') }}</textarea>
                                </div>


                                <input type="submit" name="txt" value="Send Mail" class="mt-4 btn btn-primary float-right">
                            </form>
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
<script src="{{ asset('cork/plugins/editors/quill/quill.js') }}"></script>
<script src="{{ asset('cork/plugins/editors/quill/custom-quill.js') }}"></script>






@endpush
