<?php

namespace App\Http\Requests\AdminForm;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected $form;
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
            // 'form_type_id' => 'required',
            // 'title_nepali' => 'required|max:191',
            // 'status' => 'required',
            // 'layout' => 'required',
            // 'description' => '',
            // 'slug' => 'required|unique:forms,slug,'.$_REQUEST['form_id'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Form Title Field cannot be Null!!',
            'title.max' => 'Form title accept only less than 191 character!!',
            'slug.unique' => 'Please set a unique slug.',
            'slug.required' => 'Form must have a slug',
        ];
    }
}
