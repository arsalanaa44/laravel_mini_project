<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChirpRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'message' => 'required|min:10|max:255',
        ];
    }

    public function messages()
    {
        return [

            'message.min' => 'The message must be at least 10 characters.',
            'message.max' => 'The message may not be greater than 255 characters.',
        ];
    }

}
