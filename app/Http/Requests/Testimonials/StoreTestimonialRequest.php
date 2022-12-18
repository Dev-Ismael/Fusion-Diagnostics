<?php

namespace App\Http\Requests\Testimonials;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTestimonialRequest extends FormRequest
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
            'name'           => ['required' , 'string' , 'max:100' , Rule::unique('testimonials', 'name')->ignore($this->testimonial)],
            'content'        => ['required' , 'string' , 'max:1000'],
            'img'            => ['required' , 'mimes:jpeg,png,jpg' , 'max:2048'],
        ];
    }
}
