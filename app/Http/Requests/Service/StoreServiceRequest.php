<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreServiceRequest extends FormRequest
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
            'title'           => ['required', 'string', 'max:100', Rule::unique('services', 'title')->ignore($this->service)],
            'summary'         => ['required', 'string', 'min:8'],
            'content'         => ['required', 'string'],

            // SEO Array
            'seo.title'       => ['required', 'string', 'distinct', 'max:100'],
            'seo.description' => ['required', 'string', 'distinct', 'max:500'],
            'seo.keywords'    => ['required', 'string', 'distinct', 'max:500'],

            'icon'            => ['required', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'img'             => ['required', 'mimes:jpeg,png,jpg,gif', 'max:4096'],
        ];
    }
}
