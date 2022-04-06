<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <p>Title</p>
            <label for="t-text" class="sr-only">Form Title *</label>
            {{ Form::text('title',old('title')??$editForm->title??'',['class' => 'form-control','placeholder'=> 'Form Title...', 'required']) }}
            <small class="text-danger alert-message">{{ $errors->first('title') }}</small>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <p>Nepali Title</p>
            <label for="t-text" class="sr-only">Form Title (in Nepali)*</label>
            {{ Form::text('title_nepali',old('title_nepali')??$editForm->title_nepali??'',['class' => 'form-control','placeholder'=> 'Form Title...', 'required']) }}
            <small class="text-danger alert-message">{{ $errors->first('title') }}</small>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <p>Form Type</p>
            <label for="t-text" class="sr-only">Personal/Company*</label>
            <select name="form_type_id" id="" class="form-control">
                @foreach($formTypes as $formType)
                    <option value="{{$formType->id}}">{{$formType->title}}</option>
                @endforeach
            </select>
            <small class="text-danger alert-message">{{ $errors->first('form_type_id') }}</small>
        </div>
    </div>



</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <p>Slug @if(!isset($editForm))(Auto Generated)@endif</p>
            <label for="t-text" class="sr-only">Form Title (in Nepali)*</label>
            @if(isset($editForm))
                {{ Form::text('slug',old('slug')??$editForm->slug??'',['class' => 'form-control','placeholder'=> 'Form Slug...', 'required']) }}
            @else
                <input type="text" class="form-control" disabled>
            @endif
            <small class="text-danger alert-message">{{ $errors->first('title') }}</small>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <p> Status</p>
            <select name="status" class="form-control">
                <option value="1" {{ isset($editForm) ? $editForm->status == 1 ? "selected" : '' : '' }}>Active</option>
                <option value="0" {{ isset($editForm) ? $editForm->status == 0 ? "selected" : '' : '' }}>In-Active</option>
            </select>
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <label for="type">Form Layout *</label>
            <select name="layout" id="type" class="form-control" required>
                <option value="">Select a layout</option>
                @foreach(\App\Model\Form::listStatus() as $key=>$value)
                    <option value="{{$key}}" {{ isset($editForm) ? $editForm->layout == $key ? "selected" : '' : '' }}>{{$value}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="form-group">
    <p> Description</p>
    {{ Form::textarea('description', old('description')??$editForm->description??'') }}
    <small class="text-danger alert-message">{{ $errors->first('description') }}</small>
</div>