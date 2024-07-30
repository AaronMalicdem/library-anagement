<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'author'          => 'required|string|max:255',
            'title'           =>  'required|string|max:255',
            'description'     =>  'required |string|max:255',
            'isbn'            =>  'required |string|max:255',
            'published_year'  =>  'required||date|max:255',
        ];
    }
}
