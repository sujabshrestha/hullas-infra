@extends('admin.partials.master')

@push('styles')
<link href="{{ asset('cork/plugins/table/datatable/datatables.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('cork/plugins/table/datatable/dt-global_style.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />

@endpush

@section('contents')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
            <div id="breadcrumbArrowed" class="col-xl-12 col-lg-12 layout-top-spacing mb-3">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Mail Sender</h4>

                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area text-center">

                        <div class="row">
                            <div class="col-sm-6">
                                <nav class="breadcrumb-two" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item active"><a href="{{ route('admin.mail') }}">Mail</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Sender</a></li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ route('admin.mail.sender.trash') }}" class="btn btn-sm btn-danger float-right">Trash</a>
                                <a href="{{ route('admin.mail.sender.log') }}" class="btn btn-sm btn-success float-right">Log</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                <div class="row">
                    <div class="col-md-8">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Sn</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Signature</th>
                                        <th class="no-content">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($senders as $sender)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $sender->name }}</td>
                                            <td>{{ $sender->designation }}</td>
                                            <td><img src="{{ asset($sender->signature) }}" style="width: 50px;"></td>
                                            <td>

                                                <a href="#" title="Edit" data-id="{{ $sender->id }}" class="badge badge-success btn-edit-sender"> <i data-feather="edit"></i></a>
                                                <a href="{{ route('admin.mail.sender.delete', $sender->id) }}" title="Delete" class="badge badge-dark warning confirm"><i data-feather="archive"></i></a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Sn</th>
                                        <th>Name</th>
                                        <th class="no-content">Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget-content widget-content-area br-6">
                            <div class="col-lg-12 col-12 mx-auto">
                                {!! Form::open(['url'=>route('admin.mail.sender.store'), 'enctype'=>'multipart/form-data', 'id'=>'saverole']) !!}
                                <div class="form-group">
                                    <p>Name<span class="text-danger">*</span></p>
                                    <label for="title" class="sr-only">Name</label>
                                    {{ Form::text('name',old('name'),['class' => 'form-control','placeholder'=> 'Name...', 'required', 'id'=>'name']) }}
                                    <small class="text-danger alert-message">{{ $errors->first('name') }}</small>
                                </div>
                                <div class="form-group">
                                    <p>Designation<span class="text-danger">*</span></p>
                                    <label for="title" class="sr-only">Designation</label>
                                    {{ Form::text('designation',old('designation'),['class' => 'form-control','placeholder'=> 'Designation...', 'required', 'id'=>'designation']) }}
                                    <small class="text-danger alert-message">{{ $errors->first('designation') }}</small>
                                </div>
                                <div class="form-group mt-3">
                                    <p>Signature<span class="text-danger">*</span></p>
                                    <label for="title" class="sr-only">Signature</label>
                                    <input type="file" class="" accept="image/*" name="signature">
                                    <small class="text-danger alert-message">{{ $errors->first('signature') }}</small>
                                </div>

                                {{Form::submit('Submit',['class'=>'mt-4 btn btn-primary'])}}
                                {!! Form::close() !!}

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="modal fade" id="senderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    </div>
@endsection

@push('scripts')
<script src="{{ asset('cork/plugins/table/datatable/datatables.js') }}"></script>
<script src="{{ asset('cork/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('cork/plugins/sweetalerts/custom-sweetalert.js') }}"></script>
<script>
    $('#zero-config').DataTable({
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7
    });
</script>

<script>


    $('.widget-content .warning.confirm').on('click', function (event ) {
        $this = $(this);
        event.preventDefault();
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Delete',
            padding: '2em'
        }).then(function(result) {
            if (result.value) {
                window.location.href = $this.attr('href');
            }
        })
    })

    var $modal = $('#senderModal');
    $(document).on("click", ".btn-edit-sender", function (e) {
        e.preventDefault();
        var id = $(this).attr('data-id');
        var tempEditUrl = "{{ route('admin.mail.sender.edit', ':id') }}";
        tempEditUrl = tempEditUrl.replace(':id', id);

        $modal.load(tempEditUrl, function (response) {
            $modal.modal('show');
        });
    });

</script>
@endpush
