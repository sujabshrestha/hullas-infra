<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <p>Title</p>
            <label for="t-text" class="sr-only">Album Title *</label>
            {{ Form::text('title',old('title')??$editAlbum->title??'',['class' => 'form-control','placeholder'=> 'Album Title...', 'required']) }}
            <small class="text-danger alert-message">{{ $errors->first('title') }}</small>
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <p> Status</p>
            <select name="status" class="form-control">
                <option value="Active" {{ isset($editForm) ? $editForm->status == 'Active' ? "selected" : '' : '' }}>Active</option>
                <option value="InActive" {{ isset($editForm) ? $editForm->status == 'InActive' ? "selected" : '' : '' }}>In-Active</option>
            </select>
            <small class="text-danger alert-message">{{ $errors->first('status') }}</small>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-6 mx-auto">
        <div class="form-group">
            <p>Album Cover Image</p>
            <small class="text-danger alert-message">{{ $errors->first('feature_image') }}</small>
            <div class="custom-file-container" data-upload-id="myFirstImage">
                <label>Clear <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                <label class="custom-file-container__custom-file" >
                    <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="feature_image">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
        </div>
    </div>

</div>
