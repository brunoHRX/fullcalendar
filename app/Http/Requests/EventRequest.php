<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'start' => 'date_format:Y-m-d H:i:s|before:end',
            'end' => 'date_format:Y-m-d H:i:s|after:start',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Fill in the title field.',
            'title.min' => 'It must have no less than 3 characters!',
            'start.date_format' => 'fill the date whit a valide value.',
            'start.before' => 'The start date/houer value must be lower than the end date/houer value.',
            'end.date_format' => 'fill the end date whit a valide value.',
            'end.after' => 'The end date/houer must be greater than the start date/houer.',
        ];
    }
}
