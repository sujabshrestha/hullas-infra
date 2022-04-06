<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Permission</h5>
        </div>
        <div class="modal-body">
            {!! Form::open(['url'=>route('admin.mail.sender.update'), 'enctype'=>'multipart/form-data', 'id'=>'saverole']) !!}
            <input type="hidden" value="{{ $sender->id }}" name="sender_id">
            <div class="form-group">
                <p>Name<span class="text-danger">*</span></p>
                <label for="title" class="sr-only">Name</label>
                {{ Form::text('name',old('name')??$sender->name,['class' => 'form-control','placeholder'=> 'Name...', 'required', 'id'=>'name']) }}
                <small class="text-danger alert-message">{{ $errors->first('name') }}</small>
            </div>
            <div class="form-group">
                <p>Designation<span class="text-danger">*</span></p>
                <label for="title" class="sr-only">Designation</label>
                {{ Form::text('designation',old('designation')??$sender->designation,['class' => 'form-control','placeholder'=> 'Designation...', 'required', 'id'=>'designation']) }}
                <small class="text-danger alert-message">{{ $errors->first('designation') }}</small>
            </div>
            <div class="form-group mt-3">
                <p>Signature<span class="text-danger">*</span></p>
                <label for="title" class="sr-only">Signature</label>
                <input type="file" class="" accept="image/*" name="signature">
                <small class="text-danger alert-message">{{ $errors->first('signature') }}</small>

                @if($sender->signature)
                    <img src="{{ asset($sender->signature) }}" style="width: 100px;">
                    @endif

            </div>
            {{Form::submit('Update',['class'=>'mt-4 btn btn-primary'])}}
            <button class="btn btn-sm btn-danger float-right" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>


