<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * 
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
            'name' => ['required', 'min:3'],
            'description' => 'required|min:5',
        ];
    }

    public function messages(): array
    {
        return [
            'name.min' => 'A name is required',                 // to write special error massege.
            'description.min' => 'A description is required',
        ];
    }

}
