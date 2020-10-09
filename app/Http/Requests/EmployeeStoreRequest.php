<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
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
            'first_name' => 'required|min:2|max:30',
            'last_name' => 'required|min:2|max:30',
            'phone' => 'required|min:6|max:15',
            'address' => 'required|min:7|max:50',
            'job_title' => 'required|min:5|max:100'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Въведи име!',
            'last_name.required' => 'Въведи фамилия!',
            'phone.required' => 'Въведи телефонен номер!',
            'address.required' => 'Въведи адрес!',
            'job_title.required' => 'Въведи адрес!',

            'first_name.min' => 'Името трябва да е повече от 2 букви!',
            'first_name.max' => 'Името трябва да е по-малко от 30 цифри!',
            'last_name.min' => 'Фамилията трябва да е повече от 2 букви!',
            'last_name.max' => 'Фамилията трябва да е по-малко от 30 цифри!',
            'phone.min' => 'Телефонният номер трябва да е повече от 6 цифри!',
            'phone.max' => 'Телефонният номер трябва да е по-малък от 15 цифри!',
            'address.min' => 'Адресът трябва да е повече от 7 символа!',
            'address.max' => 'Адресът трябва да е по-малък от 50 символа!',
            'job_title.min' => 'Длъжността(Позицията) трябва да е повече от 5 букви!',
            'job_title.max' => 'Длъжността(Позицията) трябва да е по-малка от 100 букви!'
        ];
    }
}
