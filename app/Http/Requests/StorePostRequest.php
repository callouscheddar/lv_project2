<?php

namespace App\Http\Requests;

use App\Rules\Tags;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => ['required', 'min:5', 'max:50'],
            'content' => ['required', 'min:10', 'max:500'],
            'tags' => ['nullable', new Tags]
        ];
    }
}
