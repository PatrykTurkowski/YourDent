<?php

namespace App\Http\Requests;

use App\Rules\EndAppointmentOverlap;
use App\Rules\FreeTermEndVisit;
use App\Rules\FreeTermStartVisit;
use App\Rules\StartAppointmentOverlap;
use Illuminate\Foundation\Http\FormRequest;

class StoreTermRequest extends FormRequest
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
            'date_visit' => ['required', 'date'],
            'start_visit' => ['required', 'date_format:H:i', new StartAppointmentOverlap(request()->doctor_id, request()->date_visit)],
            'end_visit' => ['required', 'date_format:H:i', 'after_or_equal:start_visit', new EndAppointmentOverlap(request()->doctor_id, request()->date_visit)],
            'doctor_id' => ['required', 'exists:doctors,id'],
        ];
    }
}