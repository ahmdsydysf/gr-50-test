<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    // protected $redirect = '/';


    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $myRoles = [
            'username' => 'string|min:5|max:16|required',
            'mobile' =>  ['required' ,'integer' , 'digits:11'],
            'email' => 'email|unique:users,email',
            'course' => 'string|min:5|max:16|required',
        ];

        return $myRoles;
    }

    public function messages()
    {
        return [
            'mobile.integer' => 'برجااااء التحدث مع الاستاذه عبير الدور ال 3',
            'mobile.required' => 'برجااااء التحدث مع الاستاذ محمد '
        ];
    }
}
