<?php

namespace App\Rules;

use App\Models\Term;
use Illuminate\Contracts\Validation\Rule;

class StartAppointmentOverlap implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(private $doctor_id, private string|null $date)
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        if ($this->date == null) {
            return false;
        }

        return Term::where('doctor_id', '=', $this->doctor_id)
            ->where('date_visit', '=', $this->date)
            ->where('start_visit', '<', $value)
            ->where('end_visit', '>=', $value)->count() == 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        if ($this->date == null) {
            return 'date was empty ';
        }
        return 'This hour overlap';
    }
}