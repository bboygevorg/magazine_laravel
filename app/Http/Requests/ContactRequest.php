<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
          "name" => "required|min:2|max:50",
          "email" => ["required", "min:5", "max:100"],
          "subject" => ["required", "min:5", "max:100"],
          "message" => ["required", "min:5", "max:1000"],
        ];
    }

    public function messages(): array 
    {
        return [
            "name.required" => "Пожалуйста, введите имя",
            "email.required" => "Пожалуйста, введите email",
            "subject.required" => "Пожалуйста, введите тему сообщение",
            "message.required" => "Пожалуйста, введите сообщение",
            "name.min" => "Имя должно быть не менее двух символов",
            "email.min" => "Email должно быть не менее 5 символов",
            "email.max" => "Email должно быть не более 100 символов",
            "email.email" => "Ваш Email не похож на почту",
            "name.max" => "Имя должно быть не более 50 символов",
            "subject.min" => "Тема сообщения должна быть не мене 5 символов",
            "subject.max" => "Тема сообщения должна быть не более 100 символов",
            "message.min" => "Сообщение должно быть не менее 5 символов",
            "message.max" => "Сообщение должно быть не более 10 000 символов",
        ];
    }
}
