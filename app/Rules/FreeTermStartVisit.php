<?php

namespace App\Rules;

use App\Models\Term;
use Illuminate\Contracts\Validation\InvokableRule;

class FreeTermStartVisit implements InvokableRule
{

    public function __construct(
        public $data

    ) {
    }
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {

        if (!is_array($this->data['date_visit'])) {
            if (
                Term::where('doctor_id', '=', $this->data['doctor_id'])
                ->where('date_visit', '=', $this->data['date_visit'])
                ->where('start_visit', '<=', $this->data['start_visit'])
                ->where('end_visit', '>', $this->data['start_visit'])->count() != 0
            ) {
                $fail('This doctor have terms in this time.');
            }
        } else {
            for ($i = 0; $i < count($this->data['start_visit']); $i++) {
                if (
                    Term::where('doctor_id', '=', $this->data['doctor_id'])
                    ->where('date_visit', '=', $this->data['date_visit'][$i])
                    ->where('start_visit', '<=', $this->data['start_visit'][$i])
                    ->where('end_visit', '>', $this->data['start_visit'][$i])->count() != 0
                ) {
                    $fail('This doctor have terms in this time.');
                }
            }
        }
    }
}