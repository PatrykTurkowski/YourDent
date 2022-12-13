<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchFreeVisitRequest extends FormRequest
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
            'start_day' => ['nullable', 'date'],
            'end_day' => ['nullable', 'date', 'after_or_equal:start_date'],
            'category_id' => ['nullable', 'string']
        ];
    }
}