<?php

namespace App\Http\Requests\AdminForm;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
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
            'title' => 'required|max:191',
            'form_type_id' => 'required',
            'title_nepali' => 'required|max:191',
            'status' => 'required',
            'layout' => 'required',
            'description' => '',
            'slug' => ''
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Form Title Field cannot be Null!!',
            'title.max' => 'Form title accept only less than 191 character!!',
        ];
    }
}
