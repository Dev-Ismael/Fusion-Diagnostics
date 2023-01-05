<?php

namespace App\Http\Requests\Test;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTestRequest extends FormRequest
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
            'title'           => ['nullable', 'string', 'max:100', Rule::unique('services', 'title')->ignore($this->service)],
            'code'            => ['nullable', 'string', 'max:100'],
            'time'            => ['nullable', 'string', 'max:100'],
            'components'      => ['nullable', 'string', 'max:255'],
            'specimen'        => ['nullable', 'string', 'max:100'],
            'instructions'    => ['nullable', 'string', 'max:1000'],
            'billing_codes'   => ['nullable', 'string', 'max:100'],
        ];
    }
}
