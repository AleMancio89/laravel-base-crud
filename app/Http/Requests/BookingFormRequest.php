<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingFormRequest extends FormRequest
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
            'name' => 'required|string',
            'check_in' => 'required|size:10',
            'check_out' => 'required|size:10',
            'credit_card' => 'required|numeric',
            'room' => 'required|numeric',
            'more_details' => 'string'
        ];
    }
}



