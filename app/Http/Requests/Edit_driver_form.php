<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class Edit_driver_form extends FormRequest
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
    public function rules(Request $request)
    {
        return [
          'name' => 'required|name',
          'mobail' => 'required|mobail|unique:drivers,mobail,'.$request->id,
          'tel' => 'nullable|tel',
          'ostan' => 'nullable|name',
          'city' => 'nullable|name',
          'address' => 'nullable|address',
          'codepost' => 'nullable|codepost',
          'birthday' => 'nullable',
          'codemly' => 'nullable|codepost|unique:drivers,codemly,'.$request->id,
          'number_ran' => 'nullable|numeric|unique:drivers,number_ran,'.$request->id,
          'hooshmand_ran' => 'nullable|numeric|unique:drivers,hooshmand_ran,'.$request->id,
        ];
    }
}
