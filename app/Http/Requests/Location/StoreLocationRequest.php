<?php

namespace App\Http\Requests\Location;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreLocationRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
    */
    public function rules()
    {
        return [
            'title'           => ['required', 'string', 'max:1000', Rule::unique('locations', 'title')->ignore($this->location)],
            'street_view'     => ['required', 'string', 'max:1000' ],
            'working_hours'   => ['required', 'string', 'max:255' ],
        ];
    }

}
