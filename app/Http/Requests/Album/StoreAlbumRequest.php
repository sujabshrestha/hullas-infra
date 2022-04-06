<?php

namespace App\Http\Requests\Album;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlbumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'status' => 'required',
            'feature_image' => 'mimes:jpeg,png,jpg,gif,svg|max:8192',
        ];
    }

    public  function messages()
    {
        return [
            'feature_image.max' => 'Maximum file size allowed is 8 mb.'
        ];
    }
}
