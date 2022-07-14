<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotebookStoreRequest extends FormRequest
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
            'name' => 'required|max:255',
            'phone' => 'required|unique:notebooks|max:11',
            'email' => 'required|unique:notebooks|max:255',
            'firm_id' => 'sometimes|nullable|max:255',
            'dirth_date' => 'sometimes|nullable',
            'image' => 'sometimes|nullable',
        ];
    }
}
