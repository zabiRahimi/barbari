<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Car_form extends FormRequest
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
          'name' => 'nullable|min:2',
          'class' => 'nullable|min:3',
          'axile' => 'nullable|numeric',
          'ton' => 'nullable|numeric',
          'plak' => 'nullable|numeric|unique:cars',
          'model' => 'nullable|numeric',
          'hooshmand_car' => 'required|numeric|unique:cars',
          'pic' => 'nullable|',

        ];
    }
}
