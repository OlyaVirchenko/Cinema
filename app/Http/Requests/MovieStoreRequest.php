<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieStoreRequest extends FormRequest
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
            'name' => 'required|max:255',
            'duration' => 'required|max:180',
            'description' => 'required|max:255',
            'country' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ' Поле "Название фильма" должно быть заполнено!',
            'name.max' => ' Длина строки "Название фильма" не должна превывашть 255 символов!',


            'duration.required' => ' Поле "Продолжительность" должно быть заполнено!',
            'duration.min' => ' Продолжительность" должно быть больше 10!',
            'duration.max' => ' Продолжительность" должно быть меньше 180!',

            'description.required' => ' Поле "Описание фильма" должно быть заполнено!',
            'description.max' => ' Длина строки "Описание фильма" не должна превывашть 255 символов!',

            'country.required' => ' Поле "Страна" должно быть заполнено!',
            'country.max' => ' Длина строки "Страна" не должна превывашть 255 символов!'
        ];
    }
}
