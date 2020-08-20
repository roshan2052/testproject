<?php

namespace App\Http\Requests\Backend\SuperSite;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name'   => 'required|string',
            'key'    => 'required|string',
        ];
    }
    public function messages()
    {
        return [
        ];
    }
}
