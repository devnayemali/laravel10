<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'max:255', 'min:3', 'string'],
            'description' => ['required', 'max:1000', 'min:10', 'string'],
            'status' => ['required', 'numeric'],
            'user_id' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'Please Select A User',
        ];
    }
}
