<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;


class InsertAdminFormRequest extends FormRequest
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
            'email' => ['required', 'email'],
            'name' => ['required'],
            'password' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'The Admin\'s Email is required.',
            'name.required' => 'The Admin\'s Name is required.',
            'password.required' => 'The Admin\'s Password is required.'
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
    }

    protected function failedValidation(Validator $validator)
    {
        // catch error messages     
        $error_messages = $validator->errors()->all();

        // Shown Error Parameters
        throw new HttpResponseException(
            response()->json(
                [
                    'success' => false,
                    'error' => $error_messages[0],
                    'error_code' => 10, ##\ApiErrors::REQUEST_FAILED, #ApiErrors
                    'error_messages' => $error_messages,
                ]
            )
        );
    }
}
