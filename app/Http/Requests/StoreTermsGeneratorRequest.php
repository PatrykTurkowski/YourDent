<?php

namespace App\Http\Requests;

use App\Enums\Days;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;


class StoreTermsGeneratorRequest extends FormRequest
{

    public function __construct()
    {
    }

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
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'after_or_equal:start_date', 'date'],
            'time_one_visit' => ['required', 'integer', 'min:1'],
            'start_day' => ['required', 'date_format:H:i'],
            'end_day' => ['required', 'after_or_equal:start_day', 'date_format:H:i'],
            'start_break' => ['required', 'date_format:H:i'],
            'end_break' => ['required', 'after_or_equal:start_break', 'date_format:H:i'],
            'work_days' => ['required'],
            'work_days.*' => ['required', new Enum(Days::class)],
            'doctor_id' => ['required', 'exists:doctors,id', 'integer'],

        ];
    }
}