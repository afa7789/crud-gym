<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;


class DeleteAdminFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'id' => ['required','email']
        ];
      
    }

    public function messages(){
        return [
             'email.required' => 'A Email from one admin is required.'
        ];
    }

        /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation(){

    }

    protected function failedValidation(Validator $validator){   
        // catch error messages     
        $error_messages = $validator->errors()->all();

        // Shown Error Parameters
        throw new HttpResponseException(
            response()->json(
                [
                    'success' => false,
                    'error' => $error_messages[0],
                    'error_code' => 10,##\ApiErrors::REQUEST_FAILED, #ApiErrors
                    'error_messages' => $error_messages,
                ]
        ));
    }

}
