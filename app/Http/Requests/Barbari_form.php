<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Barbari_form extends FormRequest
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
          'name' => 'required|name',
          'mobail' => 'required|mobail|unique:barbaris',
          'tel' => 'nullable|tel|unique:barbaris',
          'company' => 'nullable|unique:barbaris',
          'code_co' => 'nullable|unique:barbaris',
          'ostan' => 'required|name',
          'city' => 'required|name',
          'codepost' => 'nullable|codepost|unique:barbaris',
          'address' => 'required|address',

        ];
    }
}
