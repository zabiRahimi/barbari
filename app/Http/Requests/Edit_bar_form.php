<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Edit_bar_form extends FormRequest
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
          'bar' => 'required',
          'ostan_start' => 'required|name',
          'city_start' => 'required|name',
          'address_start' => 'required|address',
          'ostan_off' => 'required|name',
          'city_off' => 'required|name',
          'address_off' => 'required|address',
          'ton' => 'required|numeric',
          'car' => 'required',
          'price' => 'required|numeric',
        ];
    }
}
